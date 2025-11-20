## Projeto final de aplicação dos conceitos vistos em sala, foi desenvolvido seguindo as recomendações padrão do PHP, utilizando os princípios SOLID, código limpo e outras recomendações também (DRY e KISS). Aqui, encontraremos a versão PHP 8.3.25, Composer e SQLite.

## Integrantes: 
- Igor Ramos
- Guilherme Vicente
- João Pedro Messias

## Estruturação das pastas 
```
P2FINAL
├── public
│   ├── index.php
│   └── register.php
├── src
│   ├── Application
│   │   └── Contracts
│   │       ├── CarRepository.php
│   │       ├── MotorcycleRepository.php
│   │       ├── TruckRepository.php
│           └── VehicleRespository.php
│   └── Domain
│       ├── Entities
│       │   ├── Car.php
│       │   ├── Motorcycle.php
│       │   ├── Truck.php
│       │   └── Vehicle.php
│       │
│       └── Service
│           └── TimeCalculator.php
├── Infra
│
├── storage
│   └── vehicles.txt
├── vendor
└── readme.md
```
