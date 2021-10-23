<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./pages/css/calculateSalary.css">
    <title>Calculate Salary</title>
</head>

<body>
    <div class="edit-salary-container">
        <div class="edit-salary-title">Calculate Salary</div>
        <div class="calculate-salary-content">
            <div class="calculate-salary-input">
                <label for="">Employee ID :</label>
                <input type="text">
            </div>


            <div class="calculate-salary-input">
                <label for="">Name :</label>
                <input type="text">
            </div>

            <div class="calculate-salary-select">
                <label for="">Department:</label>
                <select name="" id="">
                    <option value="">IT</option>
                    <option value="">HR</option>
                    <option value="">Marketing</option>
                    <option value="">Sales</option>
                </select>

            </div>
            <div class="calculate-salary-select">
                <label for="">Designation :</label>
                <select name="" id="">
                    <option value="">Accountant</option>
                    <option value="">Designer</option>
                    <option value="">QA Engineer</option>
                    <option value="">Bussiness Analyst</option>
                    <option value="">Clerk</option>
                </select>
            </div>

            <div class="calculate-salary-input">
                <label for="">Month of Pay :</label>
                <input type="text">
            </div>

        </div>
        <h3>Additions</h3>
        <div class="calculate-salary-input">
            <label for="">Allowances :</label>
            <input type="text">
        </div>
        <div class="calculate-salary-input">
            <label for="">Bonus :</label>
            <input type="text">
        </div>
        <div class="calculate-salary-input">
            <label for="">OT :</label>
            <input type="text">
        </div>


        <h3>Deductions</h3>
        <div class="calculate-salary-input">
            <label for="">No-Pay :</label>
            <input type="text">
        </div>
        <div class="calculate-salary-input">
            <label for="">EPF :</label>
            <input type="text">
        </div>

        <div class="calculate-salary-input">
            <label for="">ETF :</label>
            <input type="text">
        </div>

        <div class="calculate-salary-input">
            <label for="">Total Additions :</label>
            <input type="text">
        </div>

        <div class="calculate-salary-input">
            <label for="">Total Deductions :</label>
            <input type="text">
        </div>


        <div class="calculate-salary-input">
            <label for="">Gross Pay :</label>
            <input type="text">
        </div>

        <div class="calculate-salary-input">
            <label for="">Net Pay :</label>
            <input type="text">
        </div>

    </div>



    <div class="calculate-salary-buttons">

        <button>Reset</button>


        <button>Calculate</button>


        <button>Save</button>
    </div>


    </div>
</body>

</html>