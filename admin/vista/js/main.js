$(document).ready(function(){
    message();
});

function getDataUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    const param = urlParams.get('status');
    return param
}

function message() {

    message = getDataUrl();

    if(message == 'success') {
        alert('Item creado correctamente');
        newUrl = removeParam('status', window.location.href);
        window.location.href = newUrl;
    }

    if(message == 'edit') {
        alert('Item editado correctamente');
        newUrl = removeParam('status', window.location.href);
        window.location.href = newUrl;
    }

    if(message == 'error') {
        alert('Ha ocurrido un problema');
        newUrl = removeParam('status', window.location.href);
        window.location.href = newUrl;
    }

    if(message == 'warning') {
        alert('Este item ya existe');
        newUrl = removeParam('status', window.location.href);
        window.location.href = newUrl;
    }

    if(message == 'delete') {
        alert('Item eliminado correctamente');
        newUrl = removeParam('status', window.location.href);
        window.location.href = newUrl;
    }

}

function removeParam(key, sourceURL) {
    var rtn = sourceURL.split("?")[0],
        param,
        params_arr = [],
        queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
    if (queryString !== "") {
        params_arr = queryString.split("&");
        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
            param = params_arr[i].split("=")[0];
            if (param === key) {
                params_arr.splice(i, 1);
            }
        }
        rtn = rtn + "?" + params_arr.join("&");
    }
    return rtn;
}
