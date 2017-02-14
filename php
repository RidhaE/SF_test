
                                            
  Welcome to the Symfony bundle generator!  
                                            


Your application code must be written in bundles. This command helps
you generate them easily.

Each bundle is hosted under a namespace (like Acme/BlogBundle).
The namespace should begin with a "vendor" name like your company name, your
project name, or your client name, followed by one or more optional category
sub-namespaces, and it should end with the bundle name itself
(which must have Bundle as a suffix).

See http://symfony.com/doc/current/cookbook/bundles/best_practices.html#bundle-name for more
details on bundle naming conventions.

Use / instead of \  for the namespace delimiter to avoid any problem.


In your code, a bundle is often referenced by its name. It can be the
concatenation of all namespace parts but it's really up to you to come
up with a unique name (a good practice is to start with the vendor name).
Based on the namespace, we suggest AutobizConnectBundle.


Bundles are usually generated into the src/ directory. Unless you're
doing something custom, hit enter to keep this default!


What format do you want to use for your generated configuration?


                     
  Bundle generation  
                     

> Generating a sample bundle skeleton into app/../src/Autobiz/ConnectBundle
  created ./app/../src/Autobiz/ConnectBundle/
  created ./app/../src/Autobiz/ConnectBundle/AutobizConnectBundle.php
  created ./app/../src/Autobiz/ConnectBundle/DependencyInjection/
  created ./app/../src/Autobiz/ConnectBundle/DependencyInjection/AutobizConnectExtension.php
  created ./app/../src/Autobiz/ConnectBundle/DependencyInjection/Configuration.php
  created ./app/../src/Autobiz/ConnectBundle/Controller/
  created ./app/../src/Autobiz/ConnectBundle/Controller/DefaultController.php
  created ./app/../src/Autobiz/ConnectBundle/Tests/Controller/
  created ./app/../src/Autobiz/ConnectBundle/Tests/Controller/DefaultControllerTest.php
  created ./app/../src/Autobiz/ConnectBundle/Resources/views/Default/
  created ./app/../src/Autobiz/ConnectBundle/Resources/views/Default/index.html.twig
  created ./app/../src/Autobiz/ConnectBundle/Resources/config/
  created ./app/../src/Autobiz/ConnectBundle/Resources/config/services.yml
  created ./app/../src/Autobiz/ConnectBundle/Resources/config/routing.yml
> Checking that the bundle is autoloaded
> Enabling the bundle inside app/AppKernel.php
  updated ./app/AppKernel.php
> Importing the bundle's routes from the app/config/routing.yml file
  updated ./app/config/routing.yml

                                         
  Everything is OK! Now get to work :).  
                                         

