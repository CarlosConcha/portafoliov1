  function setSelectBoxByText(eid, etxt) {
    var eid = document.getElementById(eid);
    for (var i = 0; i < eid.options.length; ++i) {
        if (eid.options[i].text === etxt)
            eid.options[i].selected = true;
    }
}
function setSelectBoxByValue(eid, eval) {
    document.getElementById(eid).value = eval;
}