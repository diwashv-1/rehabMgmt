<template>
    <div class="container">
        <div class="row">
            <form id="stepped" action="#" method="post">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h1 class="text-center py-3">Multi step form with vanilla JS in Bootstrap 4</h1>
                        </div>
                        <div class="col-md-10">
                            <div class="indicators d-flex justify-content-around py-4 text-light">
                                <div class="rounded-circle bg-secondary px-2 shadow-sm mr-2">1</div>
                                <div class="rounded-circle bg-secondary px-2 shadow-sm mr-2">2</div>
                                <div class="rounded-circle bg-secondary px-2 shadow-sm mr-2">3</div>
                                <div class="rounded-circle bg-secondary px-2 shadow-sm">4</div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="fix-height position-relative">
                                <div class="steps">
                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="inp1">Label 1-1</label>
                                                <input type="text" id="inp1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="inp12">Label 1-2</label>
                                                <input type="text" id="inp12" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="steps">
                                    <div class="form-group">
                                        <label for="inp2">Label 2</label>
                                        <input type="text" id="inp2" class="form-control">
                                    </div>
                                </div>
                                <div class="steps">
                                    <div class="form-group">
                                        <label for="inp3">Label 3</label>
                                        <input type="text" id="inp3" class="form-control">
                                    </div>
                                </div>
                                <div class="steps">
                                    <div class="form-group">
                                        <label for="inp4">Label 4</label>
                                        <input type="text" id="inp4" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 text-right">
                            <button type="button" class="btnPrev btn btn-outline-success">Prev</button>
                            <button type="button" class="btnNext btn btn-outline-success">Next</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        class MultiStep {
            constructor(formId) {
                let myForm = document.querySelector(formId),
                    steps = myForm.querySelectorAll(".steps"),
                    btnPrev = myForm.querySelector(".btnPrev"),
                    btnNext = myForm.querySelector(".btnNext"),
                    indicators = myForm.querySelectorAll(".rounded-circle"),
                    inputClasses = ".form-control",
                    currentTab = 0;

                // we'll need 4 different functions to do this
                showTab(currentTab);

                function showTab(n) {
                    steps[n].classList.add("active");
                    if (n == 0) {
                        btnPrev.classList.add("hidden");
                        btnPrev.classList.remove("show");
                    } else {
                        btnPrev.classList.add("show");
                        btnPrev.classList.remove("hidden");
                    }
                    if (n == steps.length - 1) {
                        btnNext.textContent = "Submit";
                    } else {
                        btnNext.textContent = "Next";
                    }
                    showIndicators(n);
                }

                function showIndicators(n) {
                    for (let i = 0; i < indicators.length; i++) {
                        indicators[i].classList.replace("bg-warning", "bg-success");
                    }
                    indicators[n].className += " bg-warning";
                }

                function clickerBtn(n) {
                    if (n == 1 && !validateForm()) return false;
                    steps[currentTab].classList.remove("active");
                    currentTab = currentTab + n;
                    if (currentTab >= steps.length) {
                        myForm.submit();
                        return false;
                    }
                    showTab(currentTab);
                }
// Do whatever validation you want
                function validateForm() {
                    let input = steps[currentTab].querySelectorAll(inputClasses),
                        valid = true;
                    for (let i = 0; i < input.length; i++) {
                        if (input[i].value == "") {
                            if (!input[i].classList.contains("invalid")) {
                                input[i].classList.add("invalid");
                            }
                            valid = false;
                        }
                        if (!input[i].value == "") {
                            if (input[i].classList.contains("invalid")) {
                                input[i].classList.remove("invalid");
                            }
                        }
                    }
                    return valid;
                }
                btnPrev.addEventListener("click", () => {
                    clickerBtn(-1);
                });
                btnNext.addEventListener("click", () => {
                    clickerBtn(1);
                });
            }
        }
        let MS = new MultiStep("#stepped");
    });
</script>

<style>
    /*///////*/
    body{
        background-color: var(--light);
    }

    .indicators * {
        transition: all 0.4s ease-in-out;
    }

    .fix-height {
        min-height: 200px;
    }

    .steps {
        position: absolute;
        width: 0;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
        visibility: hidden;
        opacity: 0;
        transition: all 0.4s ease-in-out;
    }

    .steps.active {
        width: 100%;
        z-index: 1;
        visibility: visible;
        opacity: 1;
        transition: all 0.4s ease-in-out;
    }

    /* animation for input boxes */

    .form-control.invalid {
        border: 1px solid #ec2626;
        /* paste any animation you want */
        animation: shaking 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
        transform: translate3d(0, 0, 0);
        backface-visibility: hidden;
        perspective: 1000px;
        transition: all 0.4s ease-in-out;
    }

    @keyframes shaking {
        10%,
        90% {
            transform: translate3d(-2px, 0, 0);
        }
        20%,
        80% {
            transform: translate3d(4px, 0, 0);
        }
        30%,
        50%,
        70% {
            transform: translate3d(-8px, 0, 0);
        }
        40%,
        60% {
            transform: translate3d(8px, 0, 0);
        }
    }

    .hidden {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: all 0.4s ease-in-out;
    }

    .show {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transition: all 0.4s ease-in-out;
    }

    @media screen and (min-width: 768px) {
        .fix-height {
            min-height: 100px;
        }
    }


    /*///////*/
</style>
