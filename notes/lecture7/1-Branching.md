## Git Branching
Often times in software and web development, you want to build out features or experiment in your code base, but you don't want to affect your working code.  To alleviate this concern, Git introduces the concept of *branches*.

When you want to create or experiment with new features or implement bug fixes, you can *branch* off of your current, working project state.  This allows you to make and commit changes to your code in a different *branch* without affecting your main branch `master`.

## Your `master` branch
The `master` branch should be your *current, working* version.    Usually, the `master` branch is what is deployed to production environments, because it should be the most stable version of a project.

## Creating a new branch
When you are ready to start working on a new feature, you should create a new branch of your code from `master`.  Remember, `master` should always be the most up to date and stable version of your project, so branching off of it will make sure that you are starting with a fresh and stable version of your code before making any changes.

To check what branch you are on, run the `git branch` command.

```
$  git branch
* master
```

From the `master` branch, you can create a new branch using the `git checkout -b <NEW_BRANCH_NAME>` command.

```
$  git checkout -b test-branch
Switched to a new branch 'test-branch'
```

You are now in a new branch!  From this new branch, you can make changes to your code, commit those changes, and not affect the stable version of your code in your main `master` branch at all.

Once you have the changes to your code ready, you can commit the changes to your new branch using `git commit` (just like you normally would).

## Push your new branch up to GitHub
You can also keep track of your branches remotely by pushing them up to GitHub.  Use the `git push origin <BRANCH_NAME>` command to put your new branch on your remote repo.

```
git push origin test-branch
```

## Switching Branches
After all of your desired changes are committed, you can change back to your master branch using the `git checkout` command.  To switch to a different branch, run `git checkout <BRANCH_NAME>`.

```
git checkout <BRANCH_NAME>
Switched to branch '<BRANCH_NAME>'
```

Run the checkout command to get back to your `master` branch.

```
git checkout master
Switched to branch 'master'
```

## Merging branches
As we saw earlier, one of the reasons we create separate branches is so that we can develop and test new features in our code without affecting our stable, working version.  But what do we do when we finish building out a new feature in a separate branch, and are ready to move that code over to our `master` branch?  We can *merge* the feature branch into our `master` branch.

Merging branches allows you to take the code that's in one branch, and copy it over to another branch.











