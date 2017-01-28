# Information & Web Programming
This repo is meant to be a companion for the Fordham University class CISC 2350 Information & Web Programming. It will be the main source for all assignments, lecture notes, projects, and general class materials.  To get started, please [fork the repo](https://help.github.com/articles/fork-a-repo/) and follow the instructions below.

## How to use this repo
The CISC 2350 repository should be used as both a resource and a template for individual assignment submissions.  When you fork the repo, it should be added to your GitHub profile as a private repo.  **Please keep your forked copy private, and do not share with other students to remain in compliance with the university academic integrity policy**.

In addition to forking your own copy of the repository, please [add me as a contributor](https://help.github.com/articles/inviting-collaborators-to-a-personal-repository/) to your private copy using my GitHub username: `yurm04`.

**Going forward, we will refer to your forked copy of this repository as *your repo*, and this original class repository as the *class repo*.**

### Cloning your forked copy to your local machine.
To get set up with a local copy of your repo:

1. Navigate to your GitHub profile and click into your CISC2350 repo.
2. From your CISC2350 repo page, click the green "Clone or download" button to copy the link to your repository.  If you do not have SSH keys set up to your account, make sure you choose to clone with HTTPS.
3. From your terminal/command line run the following command in the directory where you want to download your respository to, making sure to replace `<YOUR_REPOSITORY_URL>` with your repository URL that you just copied:

  ```
  git clone <YOUR_REPOSITORY_URL>
  ```
4. You may be prompted to enter your GitHub username and password, and then the download will begin.  Once completed, you should see a new `CISC2350` directory with your repo in it.
5. To be able to push/pull changes to/from your remote repo, make sure you have your remote repository set up using the `git remote -v` command.  You should see the following output, with `origin` being your remote repository URL:

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
This command pulls down any changes made to the class remote repository (upstream) and reflects them in your local copy.  *Make sure to run this command and pull down changes to the class repository on a regular basis.*
