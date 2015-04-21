set :application, "VisioPlus"
set :domain,      "vision-originale.net"
set :user,        "visionoriginale"
set :use_sudo,    false

set :repository   "ssh://github.com/delrodie/VisioPlus/visioplus.git"
set :scm          :git
set :deploy_to,   "/VisioPlus/"

set :app_path,    "app"
set :model_manager, "doctrine"

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain                         # This may be the same as your `Web` server
role :db,         domain, :primary => true       # This is where Symfony2 migrations will run   

set  :keep_releases,  3

logger.level = Logger::MAX_LEVEL

set :shared_files,       ["app/config/parameters.yml"]
set :shared_children,   [app_path + "/logs", web_path + "/uploads", "vendor"]
set :use_composer, true
set :update_vendors, true

# Symfony2 >= 2.1
before 'Symfony:composer:update', 'symfony:copy_vendors'

namespace :symfony do
  desc "Copy vendors from previous release"
  task :copy_vendors, :except => { :no_release => true } do
    if Capistrano::CLI.ui.agree("Dowant to copy last release vendor dir then do composer install ?: (y/N)")
      capifony_pretty_print "--> Copying vendors from previous release"

      run "cp -a #{previous_release}/vendor #{latest_release}/"
      capifony_puts_ok
    end
  end
end
