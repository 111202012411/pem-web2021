```sh

## re-init
git init

## re-config
git config --local user.name = "<username>"
git config --local user.email = "<email>"

## commit new activities
git add .
git commit -am "<commit>"

## pushing local repo
git push -f origin "<branch>"

## make new branch
git branch "<branch>"
git push -f origin "<branch>"

## delete branch
git branch -d "<branch>"

## list branchs
git branch -l

## remote url
git remote get-url --all origin
git remote set-url --push origin "<git.url>"

## remote with ssh
git remote set-url origin --push "git@github.com:<username>/<repo>.git"

## rebase with interactive
git rebase -i HEAD~13

## r xxxxx
## s xxxxx
## s xxxxx
## s xxxxx

## reword new commit merge

## change global editor
git config core.editor micro --replace-all

```
