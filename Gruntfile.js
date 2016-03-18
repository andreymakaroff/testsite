module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    // imagemin: {
    //     dinamic: {
    //         files: [{
    //             expand: true,
    //             cwd: 'img/src/',
    //             src: ['**/*.{png,jpg,gif}'],
    //             dest: 'img/build/'
    //         }]
    //     }
    // },
    watch: {
      all: {
        files: ['js/*.js', '*.php'],
        options: {
          livereload: true,
        },
      },
      css: {
        files: ['scss/*.scss'],
        tasks: ['sass'],
        options: {
          spawn: false,
          livereload: true,
        },
      },
    },
    sass: {
      dist: {
        options: {
          compass: true,
          style: 'compressed'
        },
        files: {
          'css/style.css': 'scss/style.scss',
        }
      }
    },
  });
  require('load-grunt-tasks')(grunt);
  grunt.registerTask('default', ['watch']);

};
