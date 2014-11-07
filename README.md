## Phalcon

```
$ cd phalcon
$ comoser update
$ time ./box.phar build
Building...
./box.phar build  0.11s user 0.03s system 87% cpu 0.161 total
$ default.phar

This is the default task and the default action 
524288
```

## Symfony

```
$ cd symfony
$ comoser update
$ time ./box.phar build
Building...
./box.phar build  1.12s user 0.99s system 37% cpu 5.585 total
$ ./default.phar main

This is the default task and the default action 

2097152
```

## Aura.CLI

```
$ cd aura
$ comoser update
$ time ./box.phar build
Building...
./box.phar build  0.16s user 0.09s system 74% cpu 0.334 total
./default.phar       

This is the default task and the default action 

786432
```


## Simple

```
$ cd simple
$ time ./box.phar build
Building...
./box.phar build  0.10s user 0.03s system 98% cpu 0.127 total
$ ./default.phar 

This is the default task and the default action 
262144
```
