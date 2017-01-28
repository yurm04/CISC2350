# Information & Web Programming
This repo is meant to be a companion for the Fordham University class CISC 2350 Information & Web Programming. It will be the main source for all assignments, lecture notes, projects, and general class materials.  To get started, please [clone the repo](https://help.github.com/articles/cloning-a-repository/) and follow the instructions below.

## How to use this repo
The CISC 2350 repository should be used as both a resource and a template for individual assignment submissions.  When you clone the repo to your local machine, you will need to create a remote GitHub repository in your own account to keep your own changes synced.  **Please keep your repo copy private, and do not share with other students to remain in compliance with the university academic integrity policy**.

In addition to cloning your own copy of the repository, please [add me as a contributor](https://help.github.com/articles/inviting-collaborators-to-a-personal-repository/) to your private copy using my GitHub username: `yurm04`.

**Going forward, we will refer to your cloned copy of this repository as *your repo*, and this original class repository as the *class repo*.**

## Cloning the class repo to your local machine.
After you have been successfully added as a collaborator to the class repository, you will have access to clone your own local copy.  This will give you your own version of the class repo that you can make changes to, use to submit assignments, and keep in sync with the class repository as the course progresses.

### From the terminal
To get set up with a local copy of the class repo:

1. From the class repo page, click the green `Clone or download` button to copy the class repo URL.  If you do not have SSH keys set up with GitHub (if you aren't sure, your probably do not have them set up), then **make sure you copy the HTTPS url**.
2. Open your terminal/command line and navigate to/create a directory that you would like to save the repository in.
3. Run the `git clone` command to clone the repo to your local machine.  This will create a `CISC2350` directory and clone the repository to it locally. **Note** You may be prompted to enter your GitHub username and password if this is the first time using git from the terminal.
  ```
  git clone https://github.com/yurm04/CISC2350.git
  ```
4. Once cloning is completed, navigate to your newly copied `CISC2350` directory.  You can now begin to make changes to your repository locally.

### Via GitHub Desktop
If you are using GitHub Desktop, make sure you have the application installed and you are properly signed in.  The following instructions were copied from the [official GitHub Desktop documentation site](https://help.github.com/desktop/guides/contributing/cloning-a-repository-from-github-to-github-desktop/).

1. From the class repo page, click the green `Clone or download` button.
2. Click `Open in Desktop`.  This should open up the GitHub Desktop application on your machine.
3. You will be prompted to enter a respository name (CISC2350), and choose a location to save the repository.  Once you have filled out this information, click `Clone` to finish cloning the repository.
4. You should now have the class repository set up in the location you designated.  Navigate to this directory to ensure that you were able to successfully clone.  If everthing checks out, you are now ready to being making changes to your local repository.

## Creating your GitHub repo
At this point you should have a local copy of the class repository.  Now, it is time to create a GitHub repository where you will push your local changes to remotely.
  ```
  $  git remote -v
  origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (fetch)
  origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (push)
  ```
If you don't see `origin` set up, make sure to run the `git remote add` to set up your repo as the `origin` remote.

  ```
  git remote add origin https://github.com/YOUR_USERNAME/YOUR_FORK.git
  ```

### Sync your repo with the class repo
In order to ensure that your forked repository stays up to date with the changes made here, you'll need to configure your local repository to include the class remote repository.  To do this:

1. From your terminal/command line navigate to your local copy of the CISC2350 repository.
2. In the repository directory, run the command `git remote -v` to list out your current remote repositories.  The output should look like:

  ```
  $  git remote -v
  origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (fetch)
  origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (push)
  ```
3. Use the command `git remote add upstream https://github.com/yurm04/CISC2350.git` to add this class repository to your local list of remotes.  In the above command `upstream` is the name of our remote class repository.
4. Run `git remote -v` again and you should see a new remote repository called `upstream` that points to this class repository.  It will look like:

  ```
  $  git remote -v
  origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (fetch)
  origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (push)
  upstream  https://github.com/yurm04/CISC2350.git (fetch)
  upstream  https://github.com/yurm04/CISC2350.git (push)
  ```
You should now be set up to reference the class remote repository in order to stay up to date with any changes made here.  To pull down any changes from the class remote repository to your local forked copy, run the command:

  ```
  git pull upstream master
  ```
This command pulls down any changes made to the class remote repository (upstream) and reflects them in your local copy.  **Make sure to run this command and pull down changes to the class repository on a regular basis.**
