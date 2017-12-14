<div class="main container">
    <div class="row">
		<div class="col-sm-8  right-border">
            <h1 class="wrapper">New Applicants</h1>
                <h1 class="mytitle">Application for Admission<br>
                    Bachelor of Business Administration Program
                    <br>Fall 2018
                </h1>


                <h2>The BBA Program is competitive with a limited number of seats. Admission to the program is a three-step process:</h2>
                <h3>
                    <ol>
                        <li>
                            Admission to the college
                        </li>
                        <li>
                            Submission and approval of required documentation
                        </li>
                        <li>
                            Acceptance into the program
                        </li>
                    </ol>
                </h3>
                <h2>Acceptance is based on an admission score, completed application and supporting materials. Classes will begin in the Fall.</h2>
                <h3>
                    Please affirm the following prior to submitting an application:
                </h3>
                <form action="<?=base_url("home/display/create_applicant")?>" method="post" id="welcome">
                    <h3>
                        <input type="checkbox" name="active"> I am an admitted GHC student with an “active” status</h3>

                    <h3>
                        <input type="checkbox" name="hours"> I have completed a minimum of 50 credit hours in Area A-F including all Area F courses
                        and MATH 2200
                        <br><br>
                        <input type="checkbox" name="grades"> I have a grade of C or better in ACCT 2101, ACCT 2102, BUSA 2106, BUSA 2205, ECON
                        2105, ECON 2106 and MATH 2200<br><br>
                        or<br><br>
                        I have a C or better in the above classes while completing the remainder of the required Area F courses during Summer 2017

                    </h3>
                    <h3>
                        <input type="checkbox" name="gpa"> I have an overall GPA of 2.5 or better
                    </h3>
                    <h3>
                        <input type="checkbox" name="gpa_f"> I have a GPA of 2.8 in Area F courses
                        <a href="http://www.calculator.net/gpa-calculator.html">(http://www.calculator.net/gpa-calculator.html)</a>

                    </h3>

            <div class="mytitle"><div class="col-sm-4 col-sm-offset-4"><button type="submit"class="btn btn-lg btn-success">Continue to Application</button></div></div>
                </form>
        </div><!--col-sm-6 -->
        <div class="col-sm-4">
                <h1 class="wrapper">Returning Applicants</h1>
                <h3>Previous applicants login here to complete application or address issues</h3>
            <br>
            <h4>
                <form action='<?=base_url("home/checkLogin")?>' method="post" id="login">
                    <fieldset>
                        <div class="row">
                            <label class="col-md-5 col-sm-12">Email Address </label><input type="text"  class="col-md-5  col-sm-12" name="email">
                        </div><!--row -->
                        <div class="row">
                            <label class="col-md-5 col-sm-12">Password</label>
                            <input type="password"  class="col-md-5  col-sm-12" name="password" id="password" >
                        </div><!--row -->
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-4"><button type="submit"class="btn btn-sm btn-success">Submit</button></div>

                        </div>
                    </fieldset>
                </form>
            </h4>
        </div><!--col-sm-6 -->
     </div><!--row -->
    </div><!-- container -->


