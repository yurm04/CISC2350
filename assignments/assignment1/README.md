# Assignment 1 Prompt
This is a two part assignment.  The first part will be setting yourself up for GitHub and forking the class repository.  The second part will be creating an HTML page using the HTML concepts we covered in class.

## Setting up the Git repo
To start, please [fork this repository](https://help.github.com/articles/fork-a-repo/) to save your own copy of it to your GitHub account.  Your forked copy will also be private, and you must also [add me as a contributor](https://help.github.com/articles/inviting-collaborators-to-a-personal-repository/) so that I have access to it later.

After you add the forked version of the repository to your account, navigate to the forked repository page.  From the repository page, use the green button in the top right corner to `Clone or download` the repository to your local computer.  Copy the repository url from the dropdown prompt, making sure to `Clone with HTTPS` if you haven't set up your account with SSH keys.  From the terminal/commandline and in a directory that suits you, run the clone command in order to copy the repository to your local machine.

```
git clone <your_repository_url>
```

This will copy the entire git repository to your local computer.

## Creating your HTML file
For the second part of this assignment, you will be creating an HTML page that is a one page Bio about yourself.  Include at least the following in your HTML page:
- Proper headings for titles and subtitles.
- At least two paragraphs of text.
- Two links.
- An image of yourself or something that represents you.
- An ordered list of your favorite foods (at least 3 list items).
- An unordered list of at least 4 classes you have taken or want to take in the future.

Please make sure you validate your HTML using the [W3C validator](https://validator.w3.org/)

Feel free to take creative ownership of the content, structure, and layout of the page.

## Grading Breakdown
- 60pts for including all of the necessary elements from the above description in your Bio page.
- 10pts for a valid, error free file.
- 30pts for GitHub integration
	- Creating a GitHub account.
	- Submitting your account username and email address via the form in the slack channel.
	- Forking the class repository to your own account.
	- Adding me `yurm04` as a contributor to your forked repository.

### Syncing your local repository with your online GitHub repository
If you have some experience with git, or want to research how to sync your local and online repositories, please do the following:

Once you have completed the work to your Bio page, use the git commands discussed in class to add and commit them to your repository.  To [push your local changes up](https://help.github.com/articles/pushing-to-a-remote/) to your GitHub account, use the `git push origin master` command.  This tells git to `push` your local changes up to your remote repository named `origin`, from the `master` branch.