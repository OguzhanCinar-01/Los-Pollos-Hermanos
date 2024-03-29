function space(str, after) 
{
    if (!str) 
    {
        return false;
    }
    after = after || 4;
    var v = str.replace(/[^\dA-Z]/g, ''),
        reg = new RegExp(".{" + after + "}", "g");
    return v.replace(reg, function (a) 
    {
        return a + ' ';
    });
}

var el = document.getElementById('ccn');
el.addEventListener('keyup', function () 
{
    this.value = space(this.value, 4);
});