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
jasmine.execute(['fooSpec.js'], 'a spec name');

// determine if the code fails; and where it fails


// choose the right hint to display based on where the code fails

// display the hint on the page