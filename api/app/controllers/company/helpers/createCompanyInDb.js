const uuid = require('uuid')
const Company = require('../../../models/company')
const { buildErrObject } = require('../../../middleware/utils')

/**
 * Creates a new item in database
 * @param {Object} req - request object
 */
const createCompanyInDb = ({
  _id = '',
  name = '',
  userId = '',
  country = '',
  streetAddress = '',
  mainBusinessActivities = '',
  shareHolders = '',
  percentages = ''
}) => {
  return new Promise((resolve, reject) => {
    const company = new Company({
      _id,
      name,
      userId,
      country,
      streetAddress,
      mainBusinessActivities,
      shareHolders,
      percentages,
    })
    company.save((err, item) => {
      if (err) {
        reject(buildErrObject(422, err.message))
      }
      
      item = JSON.parse(JSON.stringify(item))

      // delete item.password
      // delete item.blockExpires
      // delete item.loginAttempts

      resolve(item)
    })
  })
}

module.exports = { createCompanyInDb }
