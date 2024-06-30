window.addEventListener("load", function(){

    // Remove Loader
    var load_screen = document.getElementById("load_screen");
    document.body.removeChild(load_screen);

    var layoutName = 'Modern Light Menu';

    var settingsObject = {
        admin: 'vbpc Admin Template',
        settings: {
            layout: {
                name: layoutName,
                toggle: true,
                darkMode: false,
                boxed: true,
                logo: {
                    darkLogo: '../src/assets/img/logo.svg',
                    lightLogo: '../src/assets/img/logo2.svg'
                }
            }
        },
        reset: false
    }


    if (settingsObject.reset) {
        localStorage.clear()
    }

    if (localStorage.length === 0) {
        vbpcThemeObject = settingsObject;
    } else {

        getvbpcThemeObject = localStorage.getItem("theme");
        getParseObject = JSON.parse(getvbpcThemeObject)
        ParsedObject = getParseObject;

        if (getvbpcThemeObject !== null) {
               
            if (ParsedObject.admin === 'vbpc Admin Template') {

                if (ParsedObject.settings.layout.name === layoutName) {

                    vbpcThemeObject = ParsedObject;
                } else {
                    vbpcThemeObject = settingsObject;
                }
                
            } else {
                if (ParsedObject.admin === undefined) {
                    vbpcThemeObject = settingsObject;
                }
            }

        }  else {
            vbpcThemeObject = settingsObject;
        }
    }

    // Get Dark Mode Information i.e darkMode: true or false
    
    if (vbpcThemeObject.settings.layout.darkMode) {
        localStorage.setItem("theme", JSON.stringify(vbpcThemeObject));
        getvbpcThemeObject = localStorage.getItem("theme");
        getParseObject = JSON.parse(getvbpcThemeObject)
    
        if (getParseObject.settings.layout.darkMode) {
            ifStarterKit = document.body.getAttribute('page') === 'starter-pack' ? true : false;
            document.body.classList.add('dark');
            if (ifStarterKit) {
                if (document.querySelector('.navbar-logo')) {
                    document.querySelector('.navbar-logo').setAttribute('src', '../../src/assets/img/logo.svg')
                }
            } else {
                if (document.querySelector('.navbar-logo')) {
                    document.querySelector('.navbar-logo').setAttribute('src', getParseObject.settings.layout.logo.darkLogo)
                }
            }
        }
    } else {
        localStorage.setItem("theme", JSON.stringify(vbpcThemeObject));
        getvbpcThemeObject = localStorage.getItem("theme");
        getParseObject = JSON.parse(getvbpcThemeObject)

        if (!getParseObject.settings.layout.darkMode) {
            ifStarterKit = document.body.getAttribute('page') === 'starter-pack' ? true : false;
            document.body.classList.remove('dark');
            if (ifStarterKit) {
                if (document.querySelector('.navbar-logo')) {
                    document.querySelector('.navbar-logo').setAttribute('src', '../../src/assets/img/logo2.svg')
                }
            } else {
                if (document.querySelector('.navbar-logo')) {
                    document.querySelector('.navbar-logo').setAttribute('src', getParseObject.settings.layout.logo.lightLogo)
                }
            }
            
        }
    }

    // Get Layout Information i.e boxed: true or false

    if (vbpcThemeObject.settings.layout.boxed) {
    
        localStorage.setItem("theme", JSON.stringify(vbpcThemeObject));
        getvbpcThemeObject = localStorage.getItem("theme");
        getParseObject = JSON.parse(getvbpcThemeObject)
    
        if (getParseObject.settings.layout.boxed) {
            
            if (document.body.getAttribute('layout') !== 'full-width') {
                document.body.classList.add('layout-boxed');
                if (document.querySelector('.header-container')) {
                    document.querySelector('.header-container').classList.add('container-xxl');
                }
                if (document.querySelector('.middle-content')) {
                    document.querySelector('.middle-content').classList.add('container-xxl');
                }
            } else {
                document.body.classList.remove('layout-boxed');
                if (document.querySelector('.header-container')) {
                    document.querySelector('.header-container').classList.remove('container-xxl');
                }
                if (document.querySelector('.middle-content')) {
                    document.querySelector('.middle-content').classList.remove('container-xxl');
                }
            }
            
        }
        
    } else {
        
        localStorage.setItem("theme", JSON.stringify(vbpcThemeObject));
        getvbpcThemeObject = localStorage.getItem("theme");
        getParseObject = JSON.parse(getvbpcThemeObject)
        
        if (!getParseObject.settings.layout.boxed) {

            if (document.body.getAttribute('layout') !== 'boxed') {
                document.body.classList.remove('layout-boxed');
                if (document.querySelector('.header-container')) {
                    document.querySelector('.header-container').classList.remove('container-xxl');
                }
                if (document.querySelector('.middle-content')) {
                    document.querySelector('.middle-content').classList.remove('container-xxl');
                }
            } else {
                document.body.classList.add('layout-boxed');
                if (document.querySelector('.header-container')) {
                    document.querySelector('.header-container').classList.add('container-xxl');
                }
                if (document.querySelector('.middle-content')) {
                    document.querySelector('.middle-content').classList.add('container-xxl');
                }
            }
        }
    }

    


    
});

