<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
</head>
<body style="font-weight:bold;">
<form action="/createStudent" method="post" id="signup">
    <input type="hidden" name="id" value="{{ $id }}">
<div class="container" style="padding-bottom: 10px">
    <br> <br>
    <div>
            @csrf
            <div class="card card-outline card-primary">
                <div class="card-header" style="background-color:#3A3A3A;">
                    <h3 class="card-title" style="color:white;">Dear Graduate</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <h4 style="padding-left: 10px">
                    Good day! Please complete this GTS questionnaire as accurately & frankly as possible by checking the
                    box corresponding to your response. Your answer will be used for research purposes in order to
                    assess graduate employability and eventually, improve course offerings of your alma mater & other
                    universities/colleges in the Philippines. Your answers to this survey will be treated with strictest
                    confidentiality.</h4>
            </div>
            <br> <br>
            <div class="border border-secondary" style="margin-left:">
                <div class="card card-outline card-primary">
                    <div class="card-header" style="background-color:#3A3A3A;">
                        <h3 class="card-title" style="color:white;">GRADUATE TRACER SURVEY (GTS)</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <div style="padding-left: 10px">
                        <h4 style="padding-left: 10px; text-align:center;"><b>A. GENERAL INFORMATION</b></h4><br>
                        <table border="1">
                            <tr>
                                <td>1.Name</td>
                                <td>2.Permanent address:</td>
                                <td>3.Email Address:</td>
                                <td>4.Telephone or Contact Number(s):</td>
                                <td>5.Mobile Number:</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px"><input type="text"  name="a[name]" placeholder="Enter name:"></td>

                                <td><input type="text"  name="a[address]" placeholder="Enter Address:"></td>

                                <td><input type="text"  name="a[email]" placeholder="Enter email:"></td>


                                <td><input type="text"  name="a[phone_number]" placeholder="Enter contact number:"></td>


                                <td><input type="text" name="a[contact_number]" placeholder="Enter mobile number:"></td>
                            </tr>
                        </table>
                        <br> <br>
                        <table>

                            <fieldset>
                                <legend>6. &nbsp;Civil status:</legend>
                                <tr>
                                    <div>
                                        <td><input type="radio" id="Single" name="a[status]" value="single" checked/></td>
                                        <td><label for="Single">Single</label></td>

                                        <td><input type="radio" id="Married" name="a[status]" value="married" /></td>
                                        <td><label for="horns">Married</label></td>
                                    </div>


                                    <div>
                                        <td><input type="radio" id="Separated" name="a[status]" value="Separated"/></td>
                                        <td><label for="Separated">Separated</label></td>

                                        <td><input type="radio" id="sparent" name="a[status]" value="Single Parent"/></td>
                                        <td><label for="sparent">Single Parent</label></td>
                                    </div>


                                    <div>
                                        <td><input type="radio" id="widow" name="a[status]" value="widow"/></td>
                                        <td><label for="widow"> Widow or Widower</label></td>
                                    </div>
                                </tr>
                            </fieldset>
                        </table>
                        <br> <br>


                        <table class="gender" id="gender" border="1" style="padding-bottom: 10px">
                            <fieldset>
                                <legend>7. &nbsp;SEX:</legend>
                                <tr>
                                    <div>
                                        <td><input type="radio" id="male" name="a[sex]" value="male" checked/></td>
                                        <td><label for="Single">MALE</label></td>
                                    </div>

                                    <div>
                                        <td><input type="radio" id="female" name="a[sex]" value="female"/></td>
                                        <td><label for="horns">FEMALE</label></td>
                                    </div>
                            </fieldset>
                        </table>

                        <br>
                        <div id="bday">
                            <legend id="bday">8. &nbsp;BIRTHDAY:</legend>
                            <input style="width:400px;  margin-left:27px;" type="date" id="bday" name="a[bday]"/>
                        </div>
                        <br>
                            <div id="region" class="region">
                                <div>
                                    <legend class="test">9. &nbsp;Region of origin:</legend>

                                    <label><input type="radio" name="a[region]" value="Region 1"> Region 1</label><br>
                                    <label><input type="radio" name="a[region]" value="Region 2"> Region 2</label><br>
                                    <label><input type="radio" name="a[region]" value="Region 3"> Region 3</label><br>
                                    <label><input type="radio" name="a[region]" value="Region 4"> Region 4</label><br>
                                </div>


                                <div style="margin-top: 45px; margin-inline-start: 20px; margin-left: -180px; ">
                                    <label><input type="radio" name="a[region]" value="Region 5"> Region 5</label><br>
                                    <label><input type="radio" name="a[region]" value="Region 6"> Region 6</label><br>
                                    <label><input type="radio" name="a[region]" value="Region 7"> Region 7</label><br>
                                    <label><input type="radio" name="a[region]" value="Region 8"> Region 8</label><br>

                                </div>

                                <div style="margin-top: 45px; margin-inline-start: 20px; ">
                                    <label><input type="radio" name="a[region]" value="Region 5"> Region 9</label><br>
                                    <label><input type="radio" name="a[region]" value="Region 6"> Region 10</label><br>
                                    <label><input type="radio" name="a[region]" value="Region 7"> Region 11</label><br>
                                    <label><input type="radio" name="a[region]" value="Region 8"> Region 12</label><br>
                                </div>

                                <div style=" margin-inline-start: 20px; margin-top: 45px; margin-right:30px;">
                                    <label><input type="radio" name="a[region]" value="Region 9"> Region 9</label><br>
                                    <label><input type="radio" name="a[region]" value="NCR"> NCR</label><br>
                                    <label><input type="radio" name="a[region]" value="CAR"> CAR</label><br>
                                    <label><input type="radio" name="a[region]" value="ARMM"> ARMM</label><br>
                                    <label><input type="radio" name="a[region]" value="CARAGA"> CARAGA</label><br>
                                </div>

                            </div>
                    </div>

                    <div class="container">
                    <table border="1">
                        <tr>
                            <td>
                                <legend>10. &nbsp;PROVINCE:</legend>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 10px"><input type="text" id="province" name="a[province]" placeholder="Enter province"
                                       style="width: 400px; margin-left -20px;"></td>
                        </tr>

                    </table>
                </div>

                <br> <br>
                <div style="border=1;">
                    <table class="gender" id="gender" style="margin-left: 10px">
                        <fieldset>
                            <legend style="margin-left: 10px">11. &nbsp;LOCATION OF RESIDENSE:</legend>
                            <tr>
                                <div>
                                    <td><input type="radio" id="city" name="a[location_residense]" value="city" checked/></td>
                                    <td><label for="Single">CITY</label></td>
                            </tr>
                </div>

                <div>
                    <td><input type="radio" id="municipality" name="a[city]" value="city"/></td>
                    <td><label for="horns">MUNICIPALITY</label></td>
                </div>
                </fieldset>

                </table>
            </div>

            <h4><b> &nbsp;</b></h4> <br>
    </div>
    <br><br>

    <div class="border border-secondary" style="margin-left:">
        <div class="card card-outline card-primary">
            <div class="card-header" style="background-color:#3A3A3A;">
                <h3 class="card-title" style="color:white;">B. &nbsp;EDUCATIONAL BACKGROUND</h3>
                <div class="card-tools">
                </div>
            </div>
            <div class="container">
                <legend>12. &nbsp;Educational Attainment (Baccalaureate Degree only):</legend>


                <table border="1" style="border-collapse: collapse; width: 100%;">
                    <tr>
                        <th>Degree(s) & Specialization(s)</th>
                        <th>College or University</th>
                        <th>Year Graduated</th>
                        <th>Honor(s) or Award(s)</th>

                    </tr>
                    <tr>
                        <td style="padding: 10px"><input type="text" name="b[degree]" placeholder="Enter degree"></td>
                        <td><input type="text" name="b[university]" placeholder="College or University"></td>
                        <td><input type="text" name="b[year]" placeholder="Year Graduated"></td>
                        <td><input type="text" name="b[honor]" placeholder="Honor or Award"></td>

                    </tr>
                </table>

                <br> <br>

                <table border="1">
                    <thead>
                    <legend>13. &nbsp;Professional Examination(s) Passed:</legend>
                    <tr>
                        <th>Institution Code</th>
                        <th>Control code</th>
                        <th>Name of Examination</th>
                        <th>Date Taken</th>
                        <th>Rating</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="padding: 10px"><input type="text" name="b[institution_code]" placeholder="Enter Institution Code"></td>
                        <td><input type="text" name="b[control_code]" placeholder="Enter Control code "></td>
                        <td><input type="text" name="b[name_examination]" placeholder="Name of Examination"></td>
                        <td><input type="date" name="b[date_taken]" placeholder="Enter Date Taken "></td>
                        <td><input type="text" name="b[rating]" placeholder="Enter Rating "></td>
                    </tr>
                    </tbody>
                </table>


                <br> <br>


                <legend>14. &nbsp; Reason(s) for taking the course(s) or pursuing degree(s). You may check() more than
                    one answer.
                </legend>
                <p>Select one or more reasons that apply to you by checking the corresponding checkbox:</p>

                <table class="text-center">
                    <thead>
                    <th></th>
                    <th>Undergraduate/AB/BS</th>
                    <th>Graduate/MS/BA/PhD</th>


                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">High grades in the course or subject area(s)related to the course:</td>
                        <td><input type="radio" name="b[reason_q1]" value="0"></td>
                        <td><input type="radio" name="b[reason_q1]" value="1"></td>

                    </tr>
                    <tr>
                        <td class="text-left">Good grades in high school:</td>
                        <td><input type="radio" name="b[reason_q2]" value="0"></td>
                        <td><input type="radio" name="b[reason_q2]" value="1"></td>

                    </tr>
                    <tr>
                        <td class="text-left">Influence of parents or relatives:</td>
                        <td><input type="radio" name="b[reason_q3]" value="0"></td>
                        <td><input type="radio" name="b[reason_q3]" value="1"></td>

                    </tr>
                    <tr>
                        <td class="text-left">Peer Influence:</td>
                        <td><input type="radio" name="b[reason_q4]" value="0"></td>
                        <td><input type="radio" name="b[reason_q4]" value="1"></td>

                    </tr>
                    <tr>
                        <td class="text-left">Inspired by a role model:</td>
                        <td><input type="radio" name="b[reason_q5]" value="0"></td>
                        <td><input type="radio" name="b[reason_q5]" value="1"></td>

                    </tr>
                    <tr>
                        <td class="text-left">Strong passion for the profession:</td>
                        <td><input type="radio" name="b[reason_q6]" value="0"></td>
                        <td><input type="radio" name="b[reason_q6]" value="1"></td>

                    </tr>
                    <tr>
                        <td class="text-left">Prospect for immediate employment:</td>
                        <td><input type="radio" name="b[reason_q7]" value="0"></td>
                        <td><input type="radio" name="b[reason_q7]" value="1"></td>
                    </tr>
                    <tr>
                        <td class="text-left">Status or prestige of the profession:</td>
                        <td><input type="radio" name="b[reason_q8]" value="0"></td>
                        <td><input type="radio" name="b[reason_q8]" value="1"></td>

                    </tr>
                    <tr>
                        <td class="text-left">Availability of course offering in chosen institution:</td>
                        <td><input type="radio" name="b[reason_q9]" value="0"></td>
                        <td><input type="radio" name="b[reason_q9]" value="1"></td>

                    </tr>
                    <tr>
                        <td class="text-left">Prospect of career advancement:</td>
                        <td><input type="radio" name="b[reason_q10]" value="0"></td>
                        <td><input type="radio" name="b[reason_q10]" value="1"></td>

                    </tr>
                    <tr>
                        <td class="text-left">Affordable for the family:</td>
                        <td><input type="radio" name="b[reason_q11]" value="0"></td>
                        <td><input type="radio" name="b[reason_q11]" value="1"></td>

                    </tr>
                    <tr>
                        <td class="text-left">Prospect of attractive compensation:</td>
                        <td><input type="radio" name="b[reason_q12]" value="0"></td>
                        <td><input type="radio" name="b[reason_q12]" value="1"></td>
                    </tr>
                    <tr>
                        <td class="text-left">Opportunity for employment abroad:</td>
                        <td><input type="radio" name="b[reason_q13]" value="0"></td>
                        <td><input type="radio" name="b[reason_q13]" value="1"></td>

                    </tr>


                    <tr>
                        <td class="text-left">No particular choice or no better idea:</td>
                        <td><input type="radio" name="b[reason_q14]" value="0"></td>
                        <td><input type="radio" name="b[reason_q14]" value="1"></td>
                    </tr>
            </div>
            </table>
            <br> <br>

            <table border="1">

                <tr>
                    <th>Title of Training or Advance Study:</th>
                    <th>Duration and Credits Earned:</th>
                    <th>Name of Training:</th>
                    <th>Institution/College/University:</th>
                </tr>
                <tr>
                    <td style="padding: 10px"><input type="text" name="b[trainingTitle]" placeholder="Enter Title of Training or Advance Study">
                    </td>
                    <td><input type="text" name="b[trainingDuration]" placeholder="Enter Duration and Credits Earned"></td>
                    <td><input type="text" name="b[trainingName]" placeholder="Enter Name of Training"></td>
                    <td><input type="text" name="b[trainingInstitution]" placeholder="Enter Institution/College/University"></td>
                </tr>
            </table>
            <h4><b> &nbsp;</b></h4> <br>
        </div>
        <br><br>
        <div class="container">

            <div class="border border-secondary" style="margin-left:">
                <div class="card card-outline card-primary">
                    <div class="card-header" style="background-color:#3A3A3A;">
                        <h3 class="card-title" style="color:white;">C. &nbsp; TRAINING(S)/ADVANCE STUDIES ATTENDED AFTER
                            COLLEGE</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                </div>
            </div>
            <legend>15a. &nbsp;Please list down all professional or work-related training program(s) including advance
                studies youhave attended after college. You may use extra sheet if needed.
            </legend>
            <br><br>
            <table border="1">
                <tr>
                    <th>Title of Training or Advance Study:</th>
                    <th>Duration and Credits Earned:</th>
                    <th>Name of Training Institution/College/University:</th>

                </tr>
                <tr>
                    <td style="padding: 10px"><input type="text" name="c[trainingTitle]" placeholder="Enter Title of Training or Advance Study">
                    </td>
                    <td><input type="text" name="c[trainingDuration]" placeholder="Enter Duration and Credits Earned:">
                    </td>
                    <td><input type="text" name="c[trainingName]"
                               placeholder="Enter Name of Training Institution/College/University"></td>

                </tr>
                <!-- You can repeat the above tr for as many entries as needed -->
            </table>
            <br> <br>
            <div>
                <table>
                    <legend>15b. &nbsp; What made you pursue advance studies?</legend>
                    <br>
                    <tr>
                        <td><input type="radio" name="c[q1]" value="For promotion"></td>
                        <td class="text-left"> For promotion</td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="c[q1]" value="For professional development"></td>
                        <td class="text-left">For professional development</td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="c[q1]" value="Others, please specify"></td>
                        <td class="text-left">Others, please specify
                    </tr>
            </div>
            </table>


            <br> <br>
            <div class="border border-secondary" style="margin-left:">
                <div class="card card-outline card-primary">
                    <div class="card-header" style="background-color:#3A3A3A;">
                        <h3 class="card-title" style="color:white;">&nbsp;D. EMPLOYMENT DATA</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                </div>
            </div>
            <table>
                <h3> 16. &nbsp;Are you presently employed?</h3>
                <tr>
                    <td><input type="radio" name="d[employed]" value="yes"></td>
                    <td style="text-align: left;"><label for="Yes">Yes</label></td>
                    <td><input type="radio" name="d[employed]" value="no"></td>
                    <td style="text-align: left;"><label for="No">No</label></td>
                    <td><input type="radio" name="d[employed]" value="Never Employed"></td>
                    <td style="text-align: left;"><label for="No">Never Employed</label></td>
                </tr>
            </table>
        </div>
        <br> <br>
    </div>


    <div>
        <h4> &nbsp; If <b>NO or NEVER BEEN EMPLOYED</b>, proceed to Questions 17.</h4>
        <h3> &nbsp; If YES, proceed to Questions 18 to 22.</h3>
    </div>
    <br><br>
    <div class="container">
        <table>
            <div id="region" class="region">
                <div>
                    <legend class="test">17. &nbsp;Please state reason(s) why you are not yet employed. You may
                        check()more than one answer
                        :
                    </legend>

                    <label><input type="checkbox" name="d[reason_no_work_op1]"> Advance or further study</label><br>
                    <label><input type="checkbox" name="d[reason_no_work_op2]"> Family concern and decided not to find a job</label><br>
                    <label><input type="checkbox" name="d[reason_no_work_op3]"> Health-related reason(s)</label><br>
                    <label><input type="checkbox" name="d[reason_no_work_op4]"> Lack of work experience</label><br>

                </div>
                <br><br>

                <div>
                    <br><br><br>
                    <br>
                    <label><input type="checkbox" name="d[option_4]"> No job opportunity</label><br>
                    <label><input type="checkbox" name="d[option_5]"> Did not look for a job</label><br>
                    <label><input type="checkbox" name="d[option_1]"> Other reason(s), please specify</label><br>

                </div>
        </table>
    </div>
    <br>
        <div class="container">
    <table>
        <div id="region" class="region">
            <div>
                <legend class="test">18. &nbsp;Present Employment Status:</legend>

                <label><input type="radio" name="d[present_employment_status]" value="Regular or Permanent"> Regular or Permanent</label><br>
                <label><input type="radio" name="d[present_employment_status]" value="Temporary"> Temporary</label><br>
                <label><input type="radio" name="d[present_employment_status]" value="Casual"> Casual</label><br>


            </div>
            <br><br>

            <div>
                <br>
                <br>
                <label><input type="radio" name="d[present_employment_status]" value="Contractual"> Contractual</label><br>
                <label><input type="radio" name="d[present_employment_status]" value="Self-employed"> Self-employed</label><br>
            </div>
    </table>
        </div>
    <div>
        &nbsp;&nbsp; <label for="">If self-employed, what skills acquired in college were you able to apply in your
            work?</label><br>
        &nbsp;&nbsp; <input type="text" size="40" name="d[self_employed]" placeholder="Enter the Answer:">
    </div>
    <br>

    <div>
        &nbsp;&nbsp; <label for="">19.&nbsp;Present occupation (Ex. Grade School Teacher, Electrical Engineer,
            Self-employed)</label><br>
        &nbsp;&nbsp; <input type="text" size="40"  name="d[present_occupation]" placeholder="Enter the Answer:">
    </div>

    <br>

    <div class="container">

        <legend> 20. Major line of business of the company you are presently employed in. Check one only.</legend>
        <table>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Agriculture, Hunting and Forestry"></td>
                <td class="text-left">Agriculture, Hunting and Forestry</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Fishing"></td>
                <td class="text-left">Fishing</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Mining and Quarrying"></td>
                <td class="text-left">Mining and Quarrying</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Manufacturing"></td>
                <td class="text-left">Manufacturing</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Electricity, Gas and Water Supply"></td>
                <td class="text-left">Electricity, Gas and Water Supply</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Construction"></td>
                <td class="text-left">Construction</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Wholesale and Retail Trade, repair of motor vehicles,motorcycles and personal and
                    household goods"></td>
                <td class="text-left">Wholesale and Retail Trade, repair of motor vehicles,motorcycles and personal and
                    household goods
                </td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Hotels and Restaurants"></td>
                <td class="text-left">Hotels and Restaurants</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Transport Storage and Communication"></td>
                <td class="text-left">Transport Storage and Communication</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Financial Intermediation"></td>
                <td class="text-left">Financial Intermediation</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Real Estate, Renting and Business Activities"></td>
                <td class="text-left">Real Estate, Renting and Business Activities</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Public Administration and Defense; CompulsorySocial Security"></td>
                <td class="text-left">Public Administration and Defense; CompulsorySocial Security</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Education"></td>
                <td class="text-left">Education</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Health and Social Work"></td>
                <td class="text-left">Health and Social Work</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Other Community, Social and Personal Service Activities"></td>
                <td class="text-left">Other Community, Social and Personal Service Activities</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Private Households with Employed Persons"></td>
                <td class="text-left">Private Households with Employed Persons</td>
            </tr>

            <tr>
                <td><input type="radio" name="d[major_present_company]" value="Extra-territorial Organizations and Bodies"></td>
                <td class="text-left">Extra-territorial Organizations and Bodies</td>
            </tr>
        </table>
        <br> <br>


        <table>
            <h4> 21. Place of work.</h4>

            <input type="radio" name="d[place_work]" value="Local">
            <label for="Local">&nbsp; Local</label>
            &nbsp;
            <input type="radio" name="d[place_work]" value="Abroad">
            <label for="Local"> &nbsp;Abroad</label>

        </table>
        <br>

        <table>
            <h4> 22. Is this your first job after college?.</h4>

            <input type="radio" name="d[first_job]" value="yes">
            <label for="Local">&nbsp; Yes</label>
            &nbsp;
            <input type="radio" name="d[first_job]" value="no">
            <label for="Local"> &nbsp;No</label>

        </table>
        <br>

        <h4>If NO, proceed to Questions 26 and 27..</h4>

        <div>
            <table>
                <h4> 23.What are your reason(s) for staying on the job? You may check () more than one answer.</h4>

                <tr>
                    <td><input type="checkbox" name="d[opt1]" value="Salaries and benefits"></td>
                    <td class="text-left">Salaries and benefits</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="d[opt2]" value="Career challenge"></td>
                    <td class="text-left">Career challenge</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="d[opt3]" value="Related to special skill"></td>
                    <td class="text-left">Related to special skill</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="d[opt4]" value="Related to course or program of study"></td>
                    <td class="text-left">Related to course or program of study</td>
                </tr>


                <tr>
                    <td><input type="checkbox" name="d[opt5]" value="Proximity to residence"></td>
                    <td class="text-left">Proximity to residence</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="d[opt6]" value="Peer influence"></td>
                    <td class="text-left">Peer influence</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="d[opt7]" value="Family influence<"></td>
                    <td class="text-left">Family influence</td>
                </tr>

                <tr>
                    <td><input type="checkbox"></td>
                    <td class="text-left">Other reason(s), please specify</td>

                </tr>
            </table>
        </div>
    </div>
    <br>
        <div class="container">
    <table>
        <h4> 24. What were your reasons for accepting the job? You may check () more than one answer..</h4>


        <tr>
            <td><input type="checkbox" name="d[acceptjob1]" value="Salaries & benefits"></td>
            <td class="text-left">Salaries & benefits</td>
        </tr>

        <tr>
            <td><input type="checkbox" name="d[acceptjob2]" value="Career challenge"></td>
            <td class="text-left">Career challenge</td>
        </tr>

        <tr>
            <td><input type="checkbox" name="d[acceptjob3]" value="Related to special skills"></td>
            <td class="text-left">Related to special skills</td>
        </tr>

        <tr>
            <td><input type="checkbox" name="d[acceptjob4]" value="Proximity to residence"></td>
            <td class="text-left">Proximity to residence</td>
        </tr>

        <tr>
            <td><input type="checkbox" name="d[acceptjob5]" value="Other reason(s), please specify"></td>
            <td class="text-left">Other reason(s), please specify</td>
        </tr>
    </table>

    <br> <br>

    <table>
        <h4> 25.What were your reason(s) for changing job? You may check () more than one answer.</h4>


        <tr>
            <td><input type="checkbox" name="d[reason1]" value="Salaries & benefits"></td>
            <td class="text-left">Salaries & benefits</td>
        </tr>

        <tr>
            <td><input type="checkbox" name="d[reason2]" value="Career challenge"></td>
            <td class="text-left">Career challenge</td>
        </tr>

        <tr>
            <td><input type="checkbox" name="d[reason3]" value="Related to special skills"></td>
            <td class="text-left">Related to special skills</td>
        </tr>

        <tr>
            <td><input type="checkbox" name="d[reason4]" value="Proximity to residence"></td>
            <td class="text-left">Proximity to residence</td>
        </tr>

        <tr>
            <td><input type="checkbox"></td>
            <td class="text-left">Other reason(s), please specify</td>

        </tr>
    </table>
    <br>
    <table>
        <div id="region" class="region">
            <div>
                <h4>27.How long did you stay in your first job?:</h4>


                <label><input type="radio" name="d[how_long_first_job_stay]" value="Less than a month"> Less than a month</label><br>
                <label><input type="radio" name="d[how_long_first_job_stay]" value="1 to 6 months"> 1 to 6 months</label><br>
                <label><input type="radio" name="d[how_long_first_job_stay]" value="7 to 11 months"> 7 to 11 months</label><br>

            </div>


            <div style="margin-top: 45px; margin-inline-start: 20px; margin-left: -180px; ">
                <label><input type="radio" name="d[how_long_first_job_stay]" value="1 year to less than 2 years"> 1 year to less than 2 years</label><br>
                <label><input type="radio" name="d[how_long_first_job_stay]" value="2 years to less than 3 years"> 2 years to less than 3 years</label><br>
                <label><input type="radio" name="d[how_long_first_job_stay]" value="3 years to less than 4 years"> 3 years to less than 4 years</label><br>


            </div>

            <div style="margin-top: 45px; margin-inline-start: 20px; ">
                <label><input type="radio" name="d[how_long_first_job_stay]" value="Others, please specify"> Others, please specify</label>
                <input type="text" size="50" name="d[how_long_first_job_stay_remarks]"  placeholder="Please specify">


            </div>
        </div>
    </table>
    <br>

    <table>
        <div id="region" class="region">
            <div>
                <h4>28. How did you find your first job?:</h4>


                <label><input type="radio" name="d[how_did_you_find_first_job]" value="Response to an advertisement"> Response to an advertisement</label><br>
                <label><input type="radio" name="d[how_did_you_find_first_job]" value="As walk-in applicant"> As walk-in applicant</label><br>
                <label><input type="radio" name="d[how_did_you_find_first_job]" value="Recommended by someone"> Recommended by someone</label><br>
                <label><input type="radio" name="d[how_did_you_find_first_job]" value="Others, please specify"> Others, please specify</label>
                <input type="text" size="50" placeholder="Please specify" name="d[how_did_you_find_first_job_remarks]">

            </div>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <div style="margin-top: 45px; margin-inline-start: 20px; margin-left: -180px; ">
                <label><input type="radio" name="d[how_did_you_find_first_job]" value="Arranged by school’s job placement officer"> Arranged by school’s job placement officer</label><br>
                <label><input type="radio" name="d[how_did_you_find_first_job]" value="Family business"> Family business</label><br>
                <label><input type="radio" name="d[how_did_you_find_first_job]" value="Job Fair or Public Employment Service Office (PESO)"> Job Fair or Public Employment Service Office (PESO)</label><br>


            </div>

        </div>
    </table>
    <br>
    <table>
        <div id="region" class="region">
            <div>
                <h4>29.How long did it take to land your first job?:</h4>


                <label><input type="radio" name="d[how_long_did_it_take_first_job]" value="Less than a month"> Less than a month</label><br>
                <label><input type="radio" name="d[how_long_did_it_take_first_job]" value="1 to 6 months"> 1 to 6 months</label><br>
                <label><input type="radio" name="d[how_long_did_it_take_first_job]" value="7 to 11 months"> 7 to 11 months</label><br>

            </div>


            <div style="margin-top: 45px; margin-inline-start: 20px; margin-left: -180px; ">
                <label><input type="radio" name="d[how_long_did_it_take_first_job]" value="1 year to less than 2 years"> 1 year to less than 2 years</label><br>
                <label><input type="radio" name="d[how_long_did_it_take_first_job]" value="2 years to less than 3 years"> 2 years to less than 3 years</label><br>
                <label><input type="radio" name="d[how_long_did_it_take_first_job]" value="3 years to less than 4 years"> 3 years to less than 4 years</label><br>


            </div>

            <div style="margin-top: 45px; margin-inline-start: 20px; ">
                <label><input type="radio" name="d[how_long_did_it_take_first_job]" value="Others, please specify"> Others, please specify</label>
                <input type="text" size="50" placeholder="Please specify" name="d[how_long_did_it_take_first_job_remarks]">


            </div>
        </div>
    </table>
        </div>
    <h4> &nbsp; 30.Job Level Position.</h4>


    <table class="text-center">
        <thead>
        <th></th>
        <th> &nbsp; &nbsp; 30.1. First Job</th>
        <th> &nbsp; &nbsp; 30.2. Current or Present</th>


        </thead>
        <tbody>
        <tr>
            <td class="text-left">Rank or Clerical</td>
            <td><input type="radio" name="d[job_rank_q1]" value="first_job"></td>
            <td><input type="radio" name="d[job_rank_q1]" value="present"></td>
        </tr>
        <tr>
            <td class="text-left">Professional, Technical or Supervisory</td>
            <td><input type="radio" name="d[job_rank_q2]" value="first_job"></td>
            <td><input type="radio" name="d[job_rank_q2]" value="present"></td>
        </tr>
        <tr>
            <td class="text-left">Managerial or Executive</td>
            <td><input type="radio" name="d[job_rank_q3]" value="first_job"></td>
            <td><input type="radio" name="d[job_rank_q3]" value="present"></td>
        </tr>
        <tr>
            <td class="text-left">Self-employed</td>
            <td><input type="radio" name="d[job_rank_q4]" value="first_job"></td>
            <td><input type="radio" name="d[job_rank_q4]" value="present"></td>
        </tr>
</table>
<br> <br>


    <div id="region" class="region container">
        <div>
            <h4>31.What is your initial gross monthly earning in your first job after college?:</h4>


            <label><input type="radio" name="d[monthly_earning_first_job]" value="Below P5,000.00"> Below P5,000.00</label><br>
            <label><input type="radio" name="d[monthly_earning_first_job]" value="P5,000.00 to less than P10,000.00"> P5,000.00 to less than P10,000.00</label><br>
            <label><input type="radio" name="d[monthly_earning_first_job]" value="P10,000.00 to less than P15,000.00"> P10,000.00 to less than P15,000.00</label><br>

        </div>


        <div style="margin-top: 45px; margin-inline-start: 20px; margin-left: -180px; ">
            <label><input type="radio" name="d[monthly_earning_first_job]" value="P15,000.00 to less than P20,000.00"> P15,000.00 to less than P20,000.00</label><br>
            <label><input type="radio" name="d[monthly_earning_first_job]" value="P20,000.00 to less than P25,000.00"> P20,000.00 to less than P25,000.00</label><br>
            <label><input type="radio" name="d[monthly_earning_first_job]" value="P25,000.00 and above"> P25,000.00 and above</label><br>
        </div>


    </div>
<div class="container">
    <h4> 32. Was the curriculum you had in college relevant to your first job?</h4>
<table>
    <tr>
        <td>
            <label for="Local">&nbsp; Yes</label>
        </td>
        <td>
            <input type="radio" name="d[curriculum_relevant_job]" value="yes">
        </td>
    </tr>
    <tr>
        <td>
            <label for="Local">&nbsp; No</label>
        </td>
        <td>
            <input type="radio" name="d[curriculum_relevant_job]" value="no">
        </td>
    </tr>
</table>
</div>
<br>

<br><br>
<div class="" style="margin-left:">
    <div class="container">
        <table>
            <h4> 33. if YES, what competencies learned in college did you find very useful in you first job? You
                maycheck ()more than one answer.</h4>


            <tr>
                <td><input type="checkbox" name="d[yes_useful_op1]"></td>
                <td class="text-left"> Communication skills</td>
            </tr>

            <tr>
                <td><input type="checkbox" name="d[yes_useful_op2]"></td>
                <td class="text-left"> Human Relations skills</td>
            </tr>

            <tr>
                <td><input type="checkbox" name="d[yes_useful_op3]"></td>
                <td class="text-left">Entrepreneurial skills</td>
            </tr>

            <tr>
                <td><input type="checkbox" name="d[yes_useful_op4]"></td>
                <td class="text-left">Information Technology skills</td>
            </tr>

            <tr>
                <td><input type="checkbox" name="d[yes_useful_op5]"></td>
                <td class="text-left">Problem-solving skills</td>
            </tr>

            <tr>
                <td><input type="checkbox" name="d[yes_useful_op6]"></td>
                <td class="text-left"> Critical Thinking skills</td>
            </tr>

            <tr>
                <td><input type="checkbox" name="d[yes_useful_op7]"></td>
                <td class="text-left"> Other skills, please specify</td>
            </tr>
        </table>
        <br> <br>

        <div>
            <h4> 34. List down suggestions to further improve your course curriculum.</h4>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <input type="text" name="d[curriculum_suggestion]" placeholder="List down the suggestions.." size="50"
                                                         style="height: 70px;">
        </div>
        <br> <br>
        <table border="1">
            <h5>Thank you
                for taking time out to fill out this questionnaire.
                Please return this GTS to your Institution
                .Being one of the alumni of your institution, may we request you to list down the names of other
                collegegraduates (AY 2000-2001 to AY 2003-2004) from your institution including their addresses and
                contactnumbers. Their participation will also be needed to make this study more meaningful and
                useful.</h5>
            <br>
            <!-- You can repeat the above tr for as many entries as needed -->
        </table>
    </div>
</div>
    <div style="text-align: right; padding: 10px">
        <button type="submit" class="btn btn-secondary">SUBMIT</button>
    </div>
</form>
</body>
</html>
