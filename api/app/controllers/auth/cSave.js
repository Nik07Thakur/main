const { matchedData } = require('express-validator')

const {
  getUserIdFromToken
} = require('./helpers')
const { isIDGood, handleError } = require('../../middleware/utils')

const { companySave, setCompanyInfo, returnCompanyToken } = require('./helpers')

const {
  emailExists,
  sendRegistrationEmailMessage
} = require('../../middleware/emailer')

/**
 * Register function called by route
 * @param {Object} req - request object
 * @param {Object} res - response object
 */



const cSave = async (req, res) => {
       try{
      const tokenEncrypted = req.headers.authorization
        .replace('Bearer ', '')
        .trim()
      let userId = await getUserIdFromToken(tokenEncrypted)
      userId = await isIDGood(userId)
      // console.log(userId)
      req.body.userId = userId
      const item = await companySave(req)
      // console.log(item)
      const companyInfo = await setCompanyInfo(item)
      const response = await returnCompanyToken(item, companyInfo)
      res.status(201).json(response)
      // console.log(response)
      // req = req.body 
       }
       catch (error) {
        handleError(res, error)
      }
}


module.exports = { cSave }