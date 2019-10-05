module.exports = function () {
    var faker = require('faker');
    var _ = require("lodash");
    return{
        orders: _.times(20, function (n) {
            return{
                id:n,
                name: faker.name.findName(),
                city: faker.address.city(),
                zipcode: faker.address.zipCode(),
                company: faker.company.companyName(),
                currency: faker.finance.currencyCode(),
                tranaction: faker.finance.transactionType(),
                job: faker.name.jobTitle()

            }
        })
    }
}

// run this: json-server assets/js/script/generate.js --port 3001