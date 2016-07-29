var exp = require('../src/test.js')

describe("Should do stuff", function()
{
    
        console.log(exp.sayHello.length);
        console.log(exp.sayHello.toString());
    it("should have a name", function()
    {
        expect(exp.sayHello("h")).toBe('Cec')
        expect(exp.sayHello.arguments).toBe({});
        console.log(exp.sayHello.arguments.length);
});
    });
