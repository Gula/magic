all:
  doctrine:
    class: sfDoctrineDatabase
    param:
      dsn:      mysql:host=localhost;dbname=casino
      username: root
      password:
