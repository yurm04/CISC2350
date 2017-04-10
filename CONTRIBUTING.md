# Contributing to the CISC 2350 Repo
Everyone is welcome to contribute this class repo, but we want to make sure we remain consistent and efficient with our contributions.  Below you will find the basic guidelines and requirements for submitting pull requests, reviewing another student's pull request, creating issues, and just generally how not to be a jerk on the internet.

## Forking the Repo
To submit changes to the main CISC2350 repo, please fork the repo to your own repository first.  Make sure to keep your forked repository up to date with the main class repository before creating any changes.  For a review on how to fork a repo, please follow the GitHub documentation.

- [Fork a repo](https://help.github.com/articles/fork-a-repo/).
- [Forking a project](https://guides.github.com/activities/forking/)

## Contributing Workflow
This class will follow a specific workflow in order to open issues, submit pull requests, and merge changes into our `master` branch.  This workflow is meant to lay out the specific steps that should be taken to add your own work to the repository, keeping the process simple and organized.

1. An issue is submitted (either by the instructor or student).
2. The issue is reviewed and can be accepted by the instructor using the `accepted` label.  Once an issue has been accepted, it is available for anyone to work on and submit a PR for.
3. A new branch is created (from the most up to date version of `master`), with the branch name being descriptive of the issue it will solve.
	
	- Branches should follow the naming convention `issueNumber/issueTitle`, where `issueNumber` is the number of the issue being addressed in the branch and `issueTitle` is a short but descriptive name for the issue e.x. `issue13/assignment6-typo`, `issue3/ternary-prompt`, `issue24/functions-sample`.
4. The new branch is pushed up to your forked repository, and a pull request is opened to merge into the class repository.
5. The pull request is reviewed.  During the review process, the reviewer(s) can ask for changes to be made if necessary.  The review process invites anyone to leave comments and allows for open discussion on the changes submitted.
6. The pull request is approved by the reviewer(s).  Every PR must also be approved by the instructor **before being merged**
7. The branch is merged into `master`.

The contributing workflow is based off of the [GitHub Flow](https://guides.github.com/introduction/flow/), except there is no `deploy` stage.

## Issues
Check out the [repo issues](https://github.com/yurm04/CISC2350/issues) if you need a place to start.  This is where we will be posting errors, typos, prompts, or suggestions that are up for grabs.  You can pick an issue you'd like to work on, make your changes to address/fix the issue (on a separate branch), and then create a pull request for it. *PLEASE NOTE* before working on an issue, please ensure that the issue has the "accepted" label associated with it in order to be certain that the issue should be worked on.  If you open a pull request that pertains to an open issue make sure you:

1. Mention and link to the issue in the pull request e.x. "This PR addresses Issue #17".  GitHub will automatically see that you have mentioned the issue in your PR and associate one with the other.
2. Once your issue PR is open, leave a comment on the *issue* ticket to inform the group that you have a PR awaiting to be merged e.x. "I have submitted pull request #6 to fix this issue."  Again, GitHub will see that you mentioned the PR in the issue and automatically associate one with the other.

### Issue Labels
Issues are labeled with specific tags to better sort and identify them.  The labels we will be using for issues are as follows:

- Bug - a bug in the sample code that needs to be fixed.
- Typo - some typo in the notes or guides that can be corrected.
- Enhancement - A feature that can be added either to the notes, sample code, or entire repository.
- Prompt - An opportunity to research, explore, explain, or experiment with some programming topic.
- accepted - the issue has been approved to be worked on (by the instructor :smile:) and PRs can be submitted to resolve the issue.
- Difficulty - the estimated level of effort necessary to complete the issue
	- easy: quick, simple
	- medium: Slightly more involved and may require more time, but relatively simple to accomplish.
	- hard: Challenging or very time consuming (within reason).

### Creating an Issue
Anyone can make an issue for a bug, enhancement, typo, or prompt.  When creating an issue, please make sure to do the following:

- Create a descriptive but concise title.
- Add as much detail as possible to the issue description: e.x. What is the issue, how can it be replicated, which files should be focused on, screenshots, etc.
- Add the appropriate labels to the issue.  **PLEASE NOTE** I will be approving student generated issues so that we know what is available to work on.  Do not approve your own issues unless given permission.

Please review the GitHub guides for more information 

- [Creating Issues](https://help.github.com/articles/creating-an-issue/).
- [Mastering Issues](https://guides.github.com/features/issues/)

## Pull Requests
Anyone can open a pull request for the class repo.  Pull requests can be opened to address errors, bugs, typos, provide additional samples, or complete a prompt.

### Opening a pull request
Before opening a pull request, make sure there is an issue open that corresponds to your changes.  If you don't see an issue that relates to the changes you want to make, create a new issue! Just make sure to follow the issues guide and mention your PR in the issue and vice versa.  When submitting a PR, you must meet the following requirements:

- Your PR is for a new branch, and is being merged into the `master` branch.
- Your PR title is descriptive, but concise.
- Your description is thoroughly detailed e.x. What's does this PR accomplish? Include the issue number that the PR addresses, steps to test your PR (if applicable), screenshots of the output (if applicable), etc.
- Label your pull request with the tag `Ready for Review` so that everyone knows your PR Is ready to be reviewed and approved.
- If there are comments on your PR asking for more details or changes, make sure you are responsive and update your branch accordingly.

### Pull Request Labels
PRs can also be labeled in order to categorize them more easily.  Please tag your PRs with the appropriate labels when submitting.

- Ready for Review: The PR is ready to be reviewed by another person and changes will be made only if necessary.
- Work In Progress: The PR has been opened, but changes and updates are still ongoing on the working branch.  Comments can be left in the meantime, but the final review should not take place until the "Ready for Review" label is in place.

### Reviewing a Pull Request
The process of getting a pull request merged into the master branch of the repository is as follows:

1. A new branch is created off of the master branch.  Any changes made to this branch that you want to propose for a merge into master should be committed and pushed up to your forked repo.
2. A pull request is opened to present changes in the new branch that can be merged into the master branch.
3. The pull request is reviewed by another user that contributes to the repository.  The review process gives us the opportunity to check each other's work and have an open discussion of the proposed changes.
4. Once the PR has been reviewed and all requirements have been met for merging into master, the PR is "approved" in order to show that someone has signed off and approved the changes being made.  PLEASE NOTE before a PR can be merged, the instructor must also approve it.
5. Finally, the PR is merged into master.

Anyone can review and approve a PR for the class repo.  When reviewing a pull request, please follow the guidelines below:

- Review the changes being made, and be mindful of how they will affect the project as a whole.
- If you have questions, need more details, or want to request a change make sure to leave comments on the PR.  This will allow the PR owner and anyone else to participate in the discussion.
- If the review is for code samples that go in our samples folder, make sure you test the samples locally on your own machine.  This will require you to pull down the branch that is included in the pull request.
- Be specific and helpful when commenting on a pull request.  Don't forget that the reason we are reviewing each other's work is so that we can have a working, error free, and high quality project that everyone can benefit from!
- **DON'T BE A JERK**.  The purpose of reviews is not to blindly or maliciously criticize the hard work of another person.  Be courteous, helpful, and truthful.
- Be supportive!  It's ok (and encouraged) to point out mistakes in a PR or challenge an approach that can be more efficient.  However, also try to commend the efforts of your peers and encourage them along the way.  A :+1: or :smile: goes a long way!
- Finally, please DO NOT merge a PR until the instructor has approved it as well.

## Formatting
To keep the pull requests and issues organized, readable, and properly formatted we will use the GitHub markdown language.  Please review the guide for using GitHub Markdown when writing your PRs and issues.

- [Mastering Markdown](https://guides.github.com/features/mastering-markdown/)
