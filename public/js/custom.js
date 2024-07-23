document.domain = 'vignettes.ml';

function openForm() {
    var formId = document.getElementById("showFormId");
    var btnId = document.getElementById("showBtnId");
    var btnIdHidden = document.getElementById("showBtnHidden");
    formId.style.display = "block";
    btnId.style.display = "none";
    btnIdHidden.style.display = "block";
}


function closeForm() {
    var formId = document.getElementById("showFormId");
    var btnId = document.getElementById("showBtnId");
    var btnIdHidden = document.getElementById("showBtnHidden");
    formId.style.display = "none";
    btnId.style.display = "block";
    btnIdHidden.style.display = "none";
}

// Call the dataTables jQuery plugin
/*
$(document).ready(function() {
  $('#dataTable').DataTable({
    columnDefs: [
        { width: 36, height: 4, targets: 4 },
        { width: 60, targets: 10 },
    ],
    fixedColumns: false,
    "pageLength": 50,
  });
});
*/

//motopay application 

$(document).ready(function() {

    //get marques if type moto selected
    jQuery('select[name="id_type"]').on('change', function() {
        var motoTypeId = jQuery(this).val();
        var url = 'https://vignettes.ml/api/getMarque/' + motoTypeId;
        if (motoTypeId) {
            jQuery('select[name="marque"]').empty();
            $('select[name="marque"]').append('<option value="" disable selected>Sélectionnez</option>');

            jQuery.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $("#frais").val(data.frais)
                    jQuery.each(data.marques, function(key, value) {
                        $('select[name="marque"]').append('<option value="' + value + '">' + key + '</option>');
                    });

                }
            });
        } else {
            $("#frais").val('');
            $("#tarif").val('');
            $('select[name="marque"]').empty();
            $('select[name="marque"]').append('<option value="" disable selected>Sélectionnez</option>');
        }
    });
    //get puissance fiscal if marques selected

    jQuery('select[name="id_type"]').on('change', function() {
        var puissanceID = jQuery(this).val();
        var url = 'https://vignettes.ml/api/getPuissance/' + puissanceID;
        if (puissanceID) {
            jQuery('select[name="puissance_f"]').empty();
            $('select[name="puissance_f"]').append('<option value="" disable selected>Sélectionnez</option>');
            jQuery.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(data) {

                    jQuery.each(data, function(key, value) {
                        $('select[name="puissance_f"]').append('<option value="' + value + '">' + key + '</option>');
                    });
                }
            });
        } else {
            $('select[name="puissance_f"]').empty();
            $('select[name="puissance_f"]').append('<option value="" disable selected>Sélectionnez</option>');
        }
    });

    //get montant if type puissance fiscal selected
    jQuery('select[name="puissance_f"]').on('change', function() {
        var montantId = jQuery(this).val();
        var url = 'https://vignettes.ml/api/getMontant/' + montantId;
        if (montantId) {
            jQuery.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $("#tarif").val(data);
                }
            });
        } else {
            $("#tarif").val('');
        }
    });
    //end
});

//show or hide prenom 
function checkvalue(val) {
    if (val == "Entreprise / Autre") {
        document.getElementById('add-label').style.display = 'none';
        document.getElementById('add-input').style.display = 'none';
        $('#nom').addClass('col-md-6 col-xl-6 col-xxl-6 col-sm-6 my-2 my-2');
        $('#add-cls').addClass('d-none');
        $('#placeholderAutre').attr("placeholder", "Saisissez le nom de la structure");
    } else {
        document.getElementById('add-label').style.display = 'block';
        document.getElementById('add-input').style.display = 'block';
        $('#nom').removeClass("col-md-6 col-xl-6 col-xxl-6 col-sm-6 my-2 my-2").addClass('col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2 my-2');
        $('#add-cls').removeClass("d-none").addClass("col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2 ");
        $('#placeholderAutre').attr("placeholder", "Saisissez votre Nom");
    }
}