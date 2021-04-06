const express = require('express')
const router = express.Router()
require('../../config/passport')
const passport = require('passport')
const requireAuth = passport.authenticate('jwt', {
  session: false
})
const trimRequest = require('trim-request')

const {
  register,
  verify,
  forgotPassword,
  resetPassword,
  getRefreshToken,
  login,
  roleAuthorization
} = require('../controllers/auth')

const {
  validateRegister,
  validateVerify,
  validateForgotPassword,
  validateResetPassword,
  validateLogin
} = require('../controllers/auth/validators')

/*
 * Auth routes
 */

/*
 * Register route
 */
router.post('/user/register', trimRequest.all, validateRegister, register)

/*
 * Verify route
 */
router.post('/user/verify', trimRequest.all, validateVerify, verify)

/*
 * Forgot password route
 */
router.post('/user/forgot', trimRequest.all, validateForgotPassword, forgotPassword)

/*
 * Reset password route
 */
router.post('/user/reset', trimRequest.all, validateResetPassword, resetPassword)

/*
 * Get new refresh token
 */
router.get(
  '/user/token',
  requireAuth,
  roleAuthorization(['customer', 'admin', 'agent']),
  trimRequest.all,
  getRefreshToken
)

/*
 * Login route
 */
router.post('/user/login', trimRequest.all, validateLogin, login)

module.exports = router
