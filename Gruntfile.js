module.exports = function(grunt){

    grunt.initConfig({

        concat: {
            js: {
                src: ['src/js/scripts.js'],
                dest: 'src/js/scripts.js'
            },
            css: {
                src: ['src/css/styles.css'],
                dest: 'public/css/styles.css'
            }
        },

        uglify: {
            my_target: {
                files: {
                    'public/js/scripts.min.js': ['src/js/scripts.js'],
                    'public/js/admin-scripts.min.js': ['src/js/admin-scripts.js']
                }
            }
        },

        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'public/css/styles.css': 'src/css/styles.sass',
                    'public/css/admin-styles.css': 'src/css/admin-styles.sass'

                }
            }
        },

        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'public/css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'public/css',
                    ext: '.min.css'
                }]
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 8', 'ie 9']
            },
            your_target: {
                src: 'public/css/styles.css',
                dest: 'public/css/styles.css'
            }
        },

        htmlmin: {
            dist: {
                options: {
                    removeComments: true,
                    collapseWhitespace: true
                },
                files: {
                    // Layouts
                    'resources/views/layouts/main.blade.php'                    : 'src/html/layouts/main.blade.php',
                    'resources/views/admin/layout.blade.php'                    : 'src/html/admin/layout.blade.php',

                    // Back Office
                    'resources/views/admin/home/index.blade.php'                : 'src/html/admin/home/index.blade.php',

                    'resources/views/admin/newsletter/index.blade.php'          : 'src/html/admin/newsletter/index.blade.php',

                    'resources/views/auth/login.blade.php'                      : 'src/html/auth/login.blade.php',

                    'resources/views/admin/partials/head.blade.php'             : 'src/html/admin/partials/head.blade.php',
                    'resources/views/admin/partials/scripts.blade.php'          : 'src/html/admin/partials/scripts.blade.php',
                    'resources/views/admin/partials/navbar.blade.php'          : 'src/html/admin/partials/navbar.blade.php',

                    // Front Office
                    'resources/views/contacts.blade.php'                        : 'src/html/contacts.blade.php',
                    'resources/views/home.blade.php'                            : 'src/html/home.blade.php',
                    'resources/views/about.blade.php'                           : 'src/html/about.blade.php',
                    'resources/views/newsletter.blade.php'                      : 'src/html/newsletter.blade.php',


                    'resources/views/includes/footer.blade.php'                 : 'src/html/includes/footer.blade.php',
                    'resources/views/includes/head.blade.php'                   : 'src/html/includes/head.blade.php',
                    'resources/views/includes/navigation.blade.php'             : 'src/html/includes/navigation.blade.php',
                    'resources/views/includes/newsletter.blade.php'             : 'src/html/includes/newsletter.blade.php',
                    'resources/views/includes/scripts.blade.php'                : 'src/html/includes/scripts.blade.php',
                    'resources/views/includes/success-message.blade.php'        : 'src/html/includes/success-message.blade.php',
                    'resources/views/includes/success-newsletter.blade.php'     : 'src/html/includes/success-newsletter.blade.php'
                }
            }
        },

        watch: {
            js: {
                files: ['src/js/*.js'],
                tasks: ['concat:js', 'uglify'],
                options: {
                    livereload: true
                }
            },
            css: {
                files: ['src/css/**/*.sass'],
                tasks: ['sass', 'autoprefixer', 'cssmin'],
                options: {
                    livereload: true
                }
            },
            html: {
                files: ['src/html/**/*.php'],
                tasks: ['htmlmin'],
                options: {
                    collapseWhitespace: true,
                    livereload: true
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');

    grunt.registerTask('default', [ 'watch' ]);
};