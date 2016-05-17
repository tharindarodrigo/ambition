/**
 * Created by Tharinda on 2016-05-16.
 */
function listItems(data, elementId, parameter) {
    var list = '<ul>';
    $.each(data, function (i, item) {
        list += '<li>' + item[parameter] + ' <button class="btn btn-xs btn-danger delete-item"  data-id=' + item.id + '><span class="fa fa-trash"></span></button></li>';
    });
    list += '</ul>';

    $('#' + elementId).html(list);
}

function deleteItems(url, elementID, parameter) {
    $('.delete-item').click(function () {
        var dataID = $(this).attr('data-id');
        var formData = new FormData();
        formData.append('id', dataID);
        $.ajax({
            url: url+'/delete',
            method: 'post',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            dataType: 'json',
            success: function (data) {
                listItems(data, elementID, parameter);
                deleteItems(url, elementID, parameter);
            }
        });

    });
}


function getAjaxData(url, elementID, parameter) {
    $.ajax({
        url: url+'/get',
        method: 'get',
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'json',
        success: function (data) {
            listItems(data, elementID, parameter);
            deleteItems(url, elementID, parameter);

        }
    });
}

function postAjaxData(url, formData, elementID, parameter){
    $.ajax({
        url: url+'/store',
        method: 'post',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        dataType: 'json',
        success: function (data) {
            listItems(data, elementID, parameter);
            deleteItems(url, elementID, parameter);
        }
    });
}

function clearField(fieldID){
    $('#'+fieldID).val('');
}

function superFunction(url, elementIdToAppendData, parameterToDisplayListData, formFieldName, textFieldId ){
    getAjaxData(url, elementIdToAppendData, parameterToDisplayListData);
    $('.'+textFieldId).click(function () {
        var value = $('#'+textFieldId).val();
        //alert(value);
        var formData = new FormData();
        formData.append(formFieldName, value);
        postAjaxData(url, formData, elementIdToAppendData, parameterToDisplayListData);
        clearField(textFieldId);

    });

}