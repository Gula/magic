all:
  doctrine:
    class: sfDoctrineDatabase
    param:
      dsn:      mysql:host=localhost;dbname=morena
      username: root
      password: