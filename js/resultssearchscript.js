   
        $(document).ready(function () {







        });

        $('#studentdeatails').click(function () {
            $('#writtenexamform').hide();
            $('#practicalexamform').hide();
            $('#results').hide();
            $('#practicalexam1').hide();
            $('#practicalexam').show();
            $('#writtenexam').show();
            $('#admissionNumtxt').val("");
            $('#homelink').hide();
        });

        $('#writtenexam').click(function () {

         

            $('#practicalexamform').hide(500);
            $('#results').hide(500);
            $('#admissionNumtxt').val("");
            $('#practicaltxt').val("");
            $('#writtenexamform').show(500);
            $('#homelink').show();


        });
        $('#practicalexam').click(function () {

            $('#writtenexamform').hide(500);
            $('#practicalexamform').show(500);
            $('#admissionNumtxt').val("");
            $('#practicaltxt').val("");
            $('#homelink').show();


        });
        $('#homelink').click(function () {

            $('#practicalexam').show();
            $('#writtenexam').show();
            $('#writtenexamform').hide();
            $('#practicalexamform').hide();
            $('#results').slideUp(100);
            $('#homelink').hide();


        });

        $('#writtenexamsearch').click(function () {

            var admissionNo1 = $('#admissionNumtxt');

            if (admissionNo1.val() == "") {
//             

                $("#admissionNumtxt").shake(3, 7, 800);
                $('#admissionNumtxt').css("border-color", "red");

            } else {
                var admissionNo = $('#admissionNumtxt').val();
                loadingresults(admissionNo);
                $('#practicalexam').hide(500);
                $('#results').slideDown(500);
                $('#noresult').hide();
                $('#admissionNumtxt').val("");
                $('#writtenmarkstab').show();
                $('#writtenstatustab').show();

            }



        });

        $('#practicalexam1').click(function () {

            $('#writtenexamform').hide(500);
            $('#writtenexam').hide(500);
            $('#practicalexam').show(500);
            $('#practicalexamform').show(500);
            $('#admissionNumtxt').val("");
            $('#results').hide(500);



        });





        $('#practicalexamsearch').click(function () {
            var inp = $("#practicaltxt");
            if (inp.val() != "") {
                var admissionNo = $('#practicaltxt').val();
                loadingresultspractical(admissionNo);
//                $('#admissionNumtxt').hide(500);
//                $('#writtenexamsearch').hide();
                $('#writtenexamform').hide();
                $('#writtenexam').hide();
                $('#results').slideDown(1000);
                $('#noresult').hide();
                $('#practicaltxt').val("");
            } else {
                $("#practicaltxt").shake(3, 7, 800);
                $('#practicaltxt').css("border-color", "red");
            }

        });


        jQuery.fn.shake = function (intShakes, intDistance, intDuration) {
            this.each(function () {
                $(this).css("position", "relative");
                for (var x = 1; x <= intShakes; x++) {
                    $(this).animate({left: (intDistance * -1)}, (((intDuration / intShakes) / 4)))
                            .animate({left: intDistance}, ((intDuration / intShakes) / 2))
                            .animate({left: 0}, (((intDuration / intShakes) / 4)));

                }
            });
            return this;
        };



        function test() {
            var admissionNo = $('#admissionNumtxt').val();


            $('#results').slideUp(200);
            $('#admissionNumtxt').css("border-color", "#e6e6e6");
//            resultsformclear();
            $('#results').removeData();

        }
        function onclickpracticaltxt() {

//            var admissionNo = $('#practicaltxt').val();
            $('#results').slideUp(200);
            $('#practicaltxt').css("border-color", "#e6e6e6");
//            resultsformclear();
//var checkdata = document.getElementById('admisionnum').innerHTML;



        }

        /*COMMENTS*/
//see text file

