module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat:{
      dist: {
        src: ['assets/js/vendor/jquery-1.11.1.min.js', 'assets/js/vendor/viewport-units-buggyfill.js', 'assets/js/vendor/jquery.smoothState.js', 'assets/js/scripts.js'],
        dest: 'assets/js/min/scripts.js'
      }
    },
    uglify: {
      my_target: {
        files: {
          'assets/js/min/scripts.min.js': ['assets/js/min/scripts.js'],
        }
      },

    },
    sass: {
      dist: {
        options: {
          style: 'compressed',
          lineNumbers: true
        },
        files: {
          'assets/css/style.css': 'assets/scss/style.scss',
        }
      }
    },
    watch: {
      scripts: {
        files: ['assets/js/*.js', 'assets/js/vendor/*.js'],
        tasks: ['jshint', 'concat', 'uglify'],
        options: {
          spawn: false,
        }
      },
      css: {
        files: ['assets/**/*.scss'],
        tasks: ['sass', 'autoprefixer'],
        options: {
          spawn: false,
        }
      },
      icons: {
        files: ['assets/**/*.svg'],
        tasks: ['svgmin', 'grunticon'],
        options: {
          spawn: false,
        }
      },
      images: {
        files: ['assets/images/*'],
        tasks: ['imagemin'],
        options: {
          spawn: false,
        }
      }
    },
    grunticon: {
      icons: {
        files: [{
          expand: true,
          cwd: 'assets/svg/min',
          src: ['*.svg', '*.png'],
          dest: "assets/svg/output"
        }],
        options: {
          customselectors: {
            "*": [".icon-$1:before"]
          }
        }
      }
    },
    imagemin: {                          // Task

        dynamic: {                         // Another target
          files: [{
            expand: true,                  // Enable dynamic expansion
            cwd: 'assets/images/',                   // Src matches are relative to this path
            src: ['*.{png,jpg}'],   // Actual patterns to match
            dest: 'assets/images/min/'                  // Destination path prefix
          }]
        }
      },
    svgmin: {
      options: {
        plugins: [
          { removeViewBox: false },
          { removeUselessStrokeAndFill: true }
        ]
      },
      dist:{                     // Target
        files: [{               // Dictionary of files
            expand: true,       // Enable dynamic expansion.
            cwd: 'assets/svg',     // Src matches are relative to this path.
            src: ['*.svg'],  // Actual pattern(s) to match.
            dest: 'assets/svg/min',       // Destination path prefix.
            ext: '.svg'     // Dest filepaths will have this extension.
          }]
        }
      },
      autoprefixer:{
        multiple_files: {
          src: 'assets/css/style.css',
        }
      },
      jshint: {
        beforeconcat: ['assets/js/scripts.js']
      },
      xml_sitemap: {
          custom_options: {
            options: {
              changefreq: 'weekly',
              dest: './',
              fileName: 'sitemap',
              siteRoot: 'http://amillionmonkeys.co.uk/',
              priority: '0.8'
            },
            files: [
              {
                expand: true,
                cwd: './',
                src: [
                  '**/*.php',
                  '!inc/*.php',
                  '!404.php'
                ]
              }
            ]
          }
        }


    });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-svgmin');
  grunt.loadNpmTasks('grunt-grunticon');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-xml-sitemap');




  // Default task(s).
  grunt.registerTask('default', ['concat', 'uglify', 'sass', 'autoprefixer', 'jshint', 'svgmin', 'grunticon:icons', 'imagemin']);
};
