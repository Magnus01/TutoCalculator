var reverseList = function(list)
{
    if (list.length == 0)
    {
        return [];
    }
    n = list.length;
    reverse = new Array();
    for (var i = 0; i<n; i++)
    {
        console.log(list);
        reverse.push(list.pop());
        console.log(reverse);
    }
    return reverse;
};


exports.reverseList = reverseList;



