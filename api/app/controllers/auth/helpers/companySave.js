const uuid = require('uuid')
const Company = require('../../../models/company')
const { buildErrObject } = require('../../../middleware/utils')

/**
 * Registers a new company in database
 * @param {Object} req - request object
 */
const companySave = (req = {}) => {
  return new Promise((resolve, reject) => {
    const company = new Company({
        _id: req.body._id,
        name: req.body.name,
        userId: req.body.userId,
        country: req.body.country,
        streetAddress: req.body.streetAddress,
        mainBusinessActivities: req.body.mainBusinessActivities,
        shareHolders: req.body.shareHolders,
        percentages: req.body.percentages
    })
    company.save((err, item) => {
      if (err) {
        reject(buildErrObject(422, err.message))
      }
      resolve(item)
    })
  })
}

module.exports = { companySave }
