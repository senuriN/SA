<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 9/26/2016
 * Time: 8:20 AM
 * Author : Dasuni Kumarapperuma
 * Copyrights : Industry Management SLIIT
 */
?>
<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<div class="content" >
    <div class="container-fluid">
        <div class="row">
            <form class="form-horizontal" id="loginForm">
                <h3 style="padding-left: 30px">Post A Vacancy</h3>
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="vacancyTitle">Title</label>
                        <div class="col-md-4">
                            <input id="title" name="title" placeholder="Enter a title for your vacancy" class="form-control input-md" required="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="jobPosition">Job Position </label>
                        <div class="col-md-4">
                            <input id="jobPosition" name="jobPosition" placeholder="Job Position" class="form-control input-md" required="" type="text">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="vacancyDescription">Vacancy Description </label>
                        <div class="col-md-4">
                            <textarea id="description" name="description" placeholder="Enter Description" class="form-control input-md" required=""></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="vacancyDescription">Vacancy Description </label>
                        <div class="col-md-4">
                            <textarea id="description" name="description" placeholder="Enter Description" class="form-control input-md" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="vacancyDescription">Focused Field of Study </label>
                        <div class="col-md-4">
                            <select class="form-control">
                                <option value="1">Information Technology</option>
                                <option value="2">Software Engineering</option>
                                <option value="3">Cyber Security</option>
                                <option value="4">Information Systems</option>
                                <option value="5">Interactive Media</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="vacancyDescription">Skills Required</label>
                        <div class="col-md-4">
                            <table>
                                <tr>
                                    <td>
                                        <input type="checkbox"> Loaded with respect to the field selected.
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="vacancyDescription"> </label>
                        <div class="col-md-4">
                            <button id="loginBtn" name="loginBtn" class="btn btn-primary">Publish</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
