## Overview ##

This folder is not deployed with a build it contains the libraries and extra documentation associated with the libraries

## Layout ##

Each library has a folder within the folder are two directories

- _Code
- _Docs

_Code contains the source code or executibles associated with the library. There is also a __gitCloneRepository.bat__ file which will clone the repository into the -Code directory from GITHUB

_Docs contains documentation and tutorials on the library

## Deploying the libraries into the build ##

a __deployLibrary.bat__ file copies the components of the library that are required for deployment to the 'libs' folder 