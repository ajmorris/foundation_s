# A sample Guardfile
# More info at https://github.com/guard/guard#readme

guard 'compass' do
  watch('^src/(.*)\.s[ac]ss')
end

# This will concatenate the javascript files specified in :files to public/js/all.js
guard :concat, type: "js", files: %w(), input_dir: "js", output: "javascript/all"

guard :concat, type: "css", files: %w(), input_dir: "sass", output: "css"

guard :jammit do
  watch(%r{^public/javascripts/(.*)\.js$})
  watch(%r{^public/stylesheets/(.*)\.css$})
end

guard 'livereload' do
  watch(%r{/.+\.(css|js|html|php)})
end

guard 'sass', :input => 'sass', :output => 'css'

# Add files and commands to this file, like the example:
#   watch(%r{file/path}) { `command(s)` }
#
guard 'shell' do
  watch(/(.*).txt/) {|m| `tail #{m[0]}` }
end

# guard 'uglify', :destination_file => "public/javascripts/application.js" do
#   watch (%r{app/assets/javascripts/application.js})
# end
