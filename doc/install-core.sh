folder='vendor/matrix-platform/core'

mkdir -p matrix

[ ! -f matrix/config.php ] && cp ${folder}/doc/config-sample.php matrix

mkdir -p public/files
chmod 777 public/files

cd matrix

mkdir -p cfg class controller/backend data doc files i18n logs menu table view/{native,twig}
chmod 777 data files logs
