#
# Minimal bashrc for user
# vim: filetype=sh
#

source /etc/profile

# Set default permissions for new files to be public
# Normally you would set this to 77  (private you only)
# but when doing web work 22 (public readable) works better
umask 22

# skip rest if NOT an interactive login (remote command)
[[ "$-" == *i* ]] || return

# Colorful and more meanful prompt for software environments
PS1='\[\e[36m\]\h\[\e[0m\]:\[\e[33m\]\w\[\e[0m\]\$ '

# save commands between bash runs
HISTFILE=~/.bash_history

# aliases to make life easier
alias dir='ls -Fq'
alias ls='ls -Fq'
alias ll='ls -Fla'
alias l='less'

# color ls -- not very nice looking in this environment
#alias ls='ls -Fq -T 0 --color=tty'

# where is the "laravel" command, if present
if [[ -x ~/.composer/vendor/bin/laravel ]]; then
   alias laravel=~/.composer/vendor/bin/laravel
fi

