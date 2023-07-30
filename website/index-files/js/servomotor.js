var slider = $("#servomotorSlider");
var durationInput = $("#durationInput");
var servomotor = $("#servomotor");
var stepsList = $("#stepsList");

var promiseInProgress = false;

slider.on("input", function () {
    if(promiseInProgress) return;
    servomotor.css({
        '-webkit-transform': 'rotate(' + slider.val() + 'deg)',
        '-moz-transform': 'rotate(' + slider.val() + 'deg)',
        'transform': 'rotate(' + slider.val() + 'deg)'
    });
});

$("#addStepBtn").on("click", function () {
    addStep();
    updateStepsList();
});
$("#previewStepsBtn").on("click", function () {
    previewSteps();
});

var steps = new Array();
function addStep() {
    var time = 1000;
    if (durationInput.val() != null && durationInput.val() > time)
        time = durationInput.val();
    steps.push({
        "duration": time,
        "pos": slider.val()
    });
    console.log(steps);
}

function updateStepsList(){
    stepsList.empty();
    steps.forEach(step => {
        const li = document.createElement("li");
        const node = document.createTextNode(step.pos+'° w '+ step.duration + "ms");
        li.appendChild(node);
        stepsList.append(li);
    });
}

function previewSteps() {

    if (promiseInProgress) return;

    promiseInProgress = true;
    var promise = Promise.resolve();
    steps.forEach(function (step) {

        promise = promise.then(function () {
            return new Promise(function (resolve) {
                setTimeout(resolve, step.duration);
                console.log(step);
                servomotor.css({
                    'transition': 'transform ' + step.duration + 'ms',
                    '-webkit-transform': 'rotate(' + step.pos + 'deg)',
                    '-moz-transform': 'rotate(' + step.pos + 'deg)',
                    'transform': 'rotate(' + step.pos + 'deg)'
                });
            });

        });

    });

    promise.then(function () {
        servomotor.css({
            'transition': 'transform 0ms'
        });
        promiseInProgress = false;
    });
}