const { validateCreateCompany } = require('./validateCreateCompany')
const { validateDeleteCompany } = require('./validateDeleteCompany')
const { validateGetCompany } = require('./validateGetCompany')
const { validateUpdateCompany } = require('./validateUpdateCompany')

module.exports = {
  validateCreateCompany,
  validateDeleteCompany,
  validateGetCompany,
  validateUpdateCompany
}
