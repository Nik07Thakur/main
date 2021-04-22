const express = require('express')
const router = express.Router()
require('../../config/passport')
const passport = require('passport')
const requireAuth = passport.authenticate('jwt', {
  session: false
})
const trimRequest = require('trim-request')

const { roleAuthorization } = require('../controllers/auth')

const {
  getCompanies,
  createCompany,
  getCompany,
  updateCompany,
  deleteCompany
} = require('../controllers/company')

const {
  validateCreateCompany,
  validateGetCompany,
  validateUpdateCompany,
  validateDeleteCompany
} = require('../controllers/company/validators')

/*
 * Users routes
 */

/*
 * Get items route
 */
router.get(
  '/',
  requireAuth,
  trimRequest.all,
  getCompanies
)

/*
 * Create new item route
 */
router.post(
  '/',
  requireAuth,
  trimRequest.all,
  validateCreateCompany,
  createCompany
)

/*
 * Get item route
 */
router.get(
  '/:id',
  requireAuth,
  trimRequest.all,
  validateGetCompany,
  getCompany
)

/*
 * Update item route
 */
router.patch(
  '/:id',
  requireAuth,
  trimRequest.all,
  validateUpdateCompany,
  updateCompany
)

/*
 * Delete item route
 */
router.delete(
  '/:id',
  requireAuth,
  trimRequest.all,
  validateDeleteCompany,
  deleteCompany
)

module.exports = router
