function loadingresults(admissionNo) {
//    alert('ok');
    var tableData;
    $.post("models/modelresultsearch.php", {loading_results: 'table', admissionNo: admissionNo}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {

            $('#resultform').hide();
            $('#noresult').show();
            $('#noresult').text("No Data Found in Database");
            $('#resultform').hide();
            $('#writtenprintbtn').hide();
            $('#practicalprintbtn').hide();

        } else {
            $.each(e, function (index, data) {

//                resultsformclear();


                $('#vclass').show();
                $('#admisionnum').text(data.admission_no);

                $('#studentname').text(data.namewithinitial);
                $('#examdate').text(data.examDate);
                $('#vclass').text(data.vehicle_class);
                $('#writtenresults').text(data.writtenResult);
                $('#status').text(data.passOrFail);
                $('#resultform').show();
//////////should hide
                $('#vclassA').hide();
                $('#vclassB').hide();
                $('#vclassB1').hide();
                $('#noresults').hide();
                $('#practicalexam1').hide();
                $('#practicalprintbtn').hide();
                $('#writtenprintbtn').show();


                $('#hiddenadmission').val(data.admission_no);
                $('#hiddenname').val(data.namewithinitial);
                $('#hiddenexamdate').val(data.examDate);
                $('#hiddenvclass').val(data.vehicle_class);
                $('#hiddenamarks').val(data.writtenResult);
                $('#hiddenstatus').val(data.passOrFail);
                $('#hiddenstatus').val(data.passOrFail);
                $('#hiddenwrittenexamresult').val("writtenexamresult");


            });
            //Load Json Data to Table
            $('#tbldetails tbody').html('').append(tableData);

            //Delete Data through Delete button
            $('.deletecustomer').click(function () {
                teacher_id_for_delete = $(this).val();
                confirm("Deletion of Company Data", "Are you sure want to delete This Teacher", "No", "Yes", function () {
                    $.post("models/customerManagementModel.php", {delete_teacher: 'delete', teacher_id_for_delete: teacher_id_for_delete}, function (delMsg) {
                        $.each(delMsg, function (index, valueDel) {
                            if (valueDel.msgType === 1) {
                                swal("Deleted!", "Teacher has been deleted successfully ", "success");
                            } else if (valueDel.msgType === 2) {
                                swal("Something Went Wrong", "Your Data could not Deleted", "warning");
                            }
                        });
                        teacher_data_table();
                    }, "json");
                });
            });
            $('.editcustomer').click(function () {
                $('#btnUpdate').show();
                $('#btnCancel').show();
                $('#btnSave').hide();
                $('#tid').val($(this).val());
                var teacherID = $('#tid').val();

                $.post("models/customerManagementModel.php", {get_teacher_data_to_up: 'upData', teacherID: teacherID}, function (up) {
                    $.each(up, function (index, data) {
                        $('#tname').val(data.name);
                        $('#tclass').val(data.class);
                    });
                }, "json");
            });
        }
    }, "json");
}


function loadingresultspractical(admissionNo) {
//    alert('ok');
    var tableData;
    $.post("models/modelresultsearch.php", {loading_practical_results: 'table', admissionNo: admissionNo}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            $('#resultform').hide();
            $('#noresult').show();
            $('#noresult').text("No Data Found in Database");
            $('#practicalprintbtn').hide();
            $('#writtenprintbtn').hide();

        } else {
            $.each(e, function (index, data) {
//               
                $('#writtenmarkstab').hide();
                $('#writtenstatustab').hide();
                $('#writtenprintbtn').hide();

                $('#resultform').show();
                $('#vclassA').show();
                $('#vclassB').show();
                $('#vclassB1').show();
                $('#vclass').hide();
                $('#admisionnum').text(data.admission_no);
                $('#studentname').text(data.namewithinitial);
                $('#examdate').text(data.examDate);
                $('#vclassA').text(data.a + " - " + data.a_pass_or_fail + " :   :  " + data.g + " - " + data.g_pass_or_fail);
                $('#vclassB').text(data.b + " - " + data.b_pass_or_fail + " :   :  " + data.d + " - " + data.d_pass_or_fail);
                $('#vclassB1').text(data.bone + " - " + data.bone_pass_or_fail + " :   :  " + data.ce + " - " + data.ce_pass_or_fail);

                $('#practicalprintbtn').show();




                $('#hiddenadmissionp').val(data.admission_no);
                $('#hiddennamep').val(data.namewithinitial);
                $('#hiddenexamdatep').val(data.examDate);
                $('#hiddenvclassA').val(data.a_pass_or_fail);
                $('#hiddenvclassB').val(data.b_pass_or_fail);
                $('#hiddenvclassB1').val(data.bone_pass_or_fail);
                $('#hiddenvclassG').val(data.g_pass_or_fail);
                $('#hiddenvclassD').val(data.d_pass_or_fail);
                $('#hiddenvclassCE').val(data.ce_pass_or_fail);



            });
            //Load Json Data to Table


            //Delete Data through Delete button


        }
    }, "json");
}

function resultsformclear() {


    $('#admisionnum').text("");
    $('#studentname').text("");
    $('#examdate').text("");
    $('#vclass').text("");
    $('#vclassA').text("");
    $('#vclassB').text("");
    $('#vclassB1').text("");
    $('#writtenresults').text("");
    $('#status').text("");



}

