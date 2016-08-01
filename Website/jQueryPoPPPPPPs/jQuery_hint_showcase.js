//wrapping all the code in a function


function jQuery_hint_showcase() {
    // load jasmine as a library into the project AND configure jasmine
    var Jasmine = require('jasmine');
    var jasmine = new Jasmine();

    // jasmine configuration: basicly like the jasmine.json file, but easier for us to edit as an object in javascript!
    jasmine.loadConfig({
        spec_dir: 'spec',
        spec_files: [
            'appSpec.js',
            'requests/**/*[sS]pec.js',
            'utils/**/*[sS]pec.js'
        ],
        helpers: [
            'helpers/**/*.js'
        ]
    });

    // input the code on the site



    // Run the spec on this code
    jasmine.execute();
    // or this code to specify a specific spec file to run
    jasmine.execute(['fooSpec.js'], 'a spec name');



    // determine if the code fails; and where it fails
    var what_went_wrong;

    jasmine.onComplete(function(passed) {
        if(passed) {
            console.log('All specs have passed');
        }
        else {
            console.log('At least one spec has failed');

            // now, we need to figure out which part of the test failed first

            /*
            jasmine.configureDefaultReporter({
                timer: new this.jasmine.Timer(),
                print: function() {
            process.stdout.write(util.format.apply(this, arguments));
            },
            showColors: true,
            jasmineCorePath: this.jasmineCorePath
            });*/

            // we can do this by correctly defining the default reporter above,
            // or by creating our own reporters like shown below

            /*
            var CustomReporter = require('./myCustomReporter');
            var customReporter = new CustomReporter();
            jasmine.addReporter(customReporter);
            */

            // more info about reporters here: http://jasmine.github.io/2.4/custom_reporter.html
        }
    });


    // Create an object with the common mistakes, and the hints that should be played if this is the mistake
    var possible_failures = {
        "missing a semicolon": ["Dude, get that semicolon in place.", "Missing a semicolon; life's really hitting you hard today, huh?"] // adding an array to create variety in the phrasing of the hints
    }


    // choose the right hint to display based on where the code fails
    if (what_went_wrong == "") {
        // congratulations, you finished the task with no mistakes
    } 
    else {

        for (var err in possible_failures) {
            if (err === what_went_wrong) {
                // setting the value in the hint section
                $("#hint").text(possible_failures[err]);
            }
        }
    }

    // it now displays the right hint on the page
}