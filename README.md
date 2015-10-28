# CVGenerator
Website with Laravel framework to create your own CV online

## How to start local development
### Using Homestead as a [LAMP Stack](https://en.wikipedia.org/wiki/LAMP_(software_bundle))
1. Install [VirtualBox 5.x](https://www.virtualbox.org/wiki/Downloads)
2. Install [Vagrant](http://www.vagrantup.com/downloads.html)
3. Open a command prompt and type in the following:
  <pre>vagrant box add laravel/homestead</pre>
4. Navigate to a folder where you want to have your Homestead virtual machine configuration then type:
  <pre>$git clone https://github.com/laravel/homestead.git Homestead</pre>
5. Navigate to the Homestead folder.
  <pre>cd Homestead</pre>
6. Once the cloning has finished, run the initialisation by typing:
  <pre>$bash init.sh</pre>

### Configuring Homestead.yaml

The configuration files are located on Linux in the following folder: 
<pre>~/.homestead</pre> 
and on Windows: 
<pre>%USERPROFILE%/.homestead</pre>

Open Homestead.yaml.
The following lines must be set, the values between <b>[ ]</b> are user defined:
<pre>
---
ip: "192.168.10.10"
memory: 2048
cpus: 1
provider: virtualbox

authorize: ~/.ssh/[The public key name].pub

keys:
    - ~/.ssh/[The private key name]

folders:
    - map: [Windows path to repository]/CVGenerator
      to: /home/vagrant/Code

sites:
    - map: homestead.app
      to: /home/vagrant/Code/framework/public
</pre>


### Adding Laravel to your machine and starting up
1. Install Laravel
2. Type in the command <pre>laravel new [App name]</pre>
2. Clone this repository in another folder.
3. Navigate to the framework folder and edit .env.example then rename it to .env. or you can just copy the one from [App name]
4. Modify your ngix file to point to framework/public where the index.php file is located.
