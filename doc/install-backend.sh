folder='vendor/matrix-platform/backend-adminlte'

cp -R ${folder}/www/{css,js} public

rm -rf public/adminlte public/js/ckeditor
mkdir -p public/adminlte
cp -R vendor/almasaeed2010/adminlte/{dist,plugins} public/adminlte
cp -R vendor/ckeditor/ckeditor public/js

touch public/css/backend-custom.css public/css/ckeditor.css
