# Dedicated Assignment Repository
In this guide we will set up your new local assignment repo (on your computer), create a remote assignment repo on your GitHub, and sync the local and the remote repos.

**To see an example `assignments` repository, [check out out the one I set up](https://github.com/yurm04/cisc2350-assignments).**

## Setting up your new assignment repository
1.  In your terminal or command prompt using the `pwd` and `cd` commands, navigate to a directory that you would like to store your assignments repository in.
2.  From inside this directory, create a new directory using the `mkdir` command.
	
	```
	mkdir cisc2350-assignments
	```
3. `cd` into your new assignments directory

	```
	cd cisc2350-assignments
	```
4. In your new assignments directory, initialize a git repository using the `git init` command.  This will create a new git repo in the assignment directory.
5. In the same directory, run the `touch` command to create a new `README.md` file.  This will create an empty `README` file so that we have something to commit.
	
	```
	touch README.md
	```
6. Run `git status` and you should see that you have added the `README` file to your repository.
7. Use `git add --all` to stage your changes for commit, preparing them to be saved.
7. Run `git commit -m` with a commit message in order to save all of your changes and commit to your repo.

	```
	git commit -m "initializing new assignments repository"
	```
8. Now, in GitHub, create a new repository using the green `+` button that can be found in the top right corner.
9. Give your new repo a name (cisc2350-assignments), a description, **SET IT TO PRIVATE**, and then click "Create repository."
10. You should be taken to your new repository page that has suggestions on what to do next.  Where it says **"...or push an existing repository from the command line"** copy the first command that will add your GitHub repo to your local repo as a remote, and run it in your local repo.

	```
	git remote add origin YOUR_REPO_URL
	```
11. Then, copy the second command that will push your local repo up to your GitHub repo and run it in your terminal.
	
	```
	git push -u origin master
	```
12. Your local repository should now be reflected in your GitHub repo.  Refresh your GitHub repo in the browser and you should now see your `README.md` file included in the main repo page.
13. **Make sure that you [add me as a collaborator](https://help.github.com/articles/inviting-collaborators-to-a-personal-repository/) to your new assignments repo on GitHub.**

## Directory Structure for Assignments
Now that your local and GitHub repos have been set up, you can start structuring your repository directory to include your assignments.  For each assignment, you should create a new directory with the format `assignment#` with a lowercase "a", and no space between the number and the word "assignment".  Inside of the assignment directory, you should be including any files and folders that are part of your assignment.  For example:

```
cisc2350-assignments
├── assignment1
|   └── bio.html 
├── assignment2/
|   ├── bio.html
|   └── style.css
├── assignment3/
|   ├── bio.html
|   └── style.css
├── assignment4/
```

**Make sure you put your previous assignments into your new assignment repo and push it all up to your GitHub.**

## Submitting yout assignment link to Blackboard
Each week, you will be responsible for:

1. Submitting your assignmnet directory and files to your `assignments` repository.
2. Submitting the GitHub URL for your *assignment directory* to BlackBoard.  

Submitting your assignmnet directory URL gives me a simple way to reach your assignment directory for that week.  An example URL will look like:
    
    
    https://github.com/yurm04/cisc2350-assignments/tree/master/assignment1
    

