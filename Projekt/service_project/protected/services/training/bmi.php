


<form name="bmiForm">
    </br>
    Your Weight(kg): <input type="text" name="weight" size="10"><br />
    Your Height(cm): <input type="text" name="height" size="10"><br />
    <input type="button" value="Calculate BMI" onClick="calculateBmi()"><br />
    Your BMI: <input type="text" name="bmi" size="10"><br />
    This Means: <input type="text" name="meaning" size="25"><br />
    <input type="reset" value="Reset" />
</form>

</br>

<div class="container">
    <h2>Understanding your BMI result</h2>
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                    Underweight
                </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    Being underweight could be a sign you're not eating enough or you may be ill. If you're underweight, a GP can help.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    Healthy weight
                </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Keep up the good work! For tips on maintaining a healthy weight, check out the partners sections.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    Overweight
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <p>The best way to lose weight if you're overweight is through a combination of diet and exercise.</p>
                    <p>The BMI calculator will give you a personal calorie allowance to help you achieve a healthy weight safely.</p>
                </div>
            </div>
        </div>
    </div>
</div>

