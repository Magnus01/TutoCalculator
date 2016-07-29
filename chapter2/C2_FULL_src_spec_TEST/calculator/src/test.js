function Person(name, number)
{
        this.name = name;
        this.number = number;

        this.changeNum = function(newNum)
        {
            this.number = newNum;
            }
}

exports.Person = Person;

exports.sayHello = function(dummy)
{
    console.log("trash val: ", dummy);
    console.log("args:", arguments);
    return "Cec";
}
