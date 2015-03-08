# -*- mode: ruby -*-
# vi: set ft=ruby :
VAGRANTFILE_API_VERSION = "2"
Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.define "runner" do |runner|
      runner.vm.box = "phusion/ubuntu-14.04-amd64"
      runner.vm.provider "virtualbox" do |v|
        v.customize ["modifyvm", :id, "--memory", "8192"]
        v.customize ["modifyvm", :id, "--cpus", "4"]
        v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
      end
      runner.vm.network "private_network", ip: "192.168.100.100"
      runner.vm.network :private_network,
        ip: "172.16.10.16",
        netmask: "255.255.255.0"
        runner.vm.network "forwarded_port", guest: 15672, host: 15672
      runner.vm.provision "shell", path: ".provision/setup-runner.sh"
  end
end
