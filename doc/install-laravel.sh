folder='vendor/matrix-platform/laravel'

cp ${folder}/index.php matrix
cp ${folder}/www/js/laravel-token.js public/js

for path in $(cat ${folder}/doc/gitignore) ; do
    grep -qxF "$path" .gitignore || echo "$path" >> .gitignore
done
