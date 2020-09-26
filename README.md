<h1>SOLID</h1>

<h2>SOLID Pattern Study Repository</h2>

```typescript
return function() {
    return [
        `Topics`: [
            `Open-Closed Principle`,
            `Single Responsability Principle`,
            `Liskov Substitution Principle`,
            `Interface Segregation Principle`,
            `Dependency Inversion Principle`
        ],
        `Fonts`: [
            `https://medium.com/backticks-tildes/the-s-o-l-i-d-principles-in-pictures-b34ce2f1e898`
        ]
    ]
`}
```

<h2 align="center">THE OPEN/CLOSED PRINCIPLE AND STRATEGY PATTERN</h2>

`CONTEXT: É RESPONSÁVEL PELA CRIAÇÃO E MANUTENÇÃO DE UMA REFERÊNCIA A UMA CLASSE STRATEGY ESPECÍFICA.`

`STRATEGY: É A INTERFACE COMUM A TODOS OS ALGORITMOS SUPORTADOS. ATRAVÉS DESTA INTERFACE, O CONTENT PODE CHAMAR O ALGORITMO CRIADO PELA CONCRETESTRATEGY.`

`CONCRETESTRATEGY: IMPLEMENTA O ALGORITMO USANDO A INTERFACE STRATEGY.`