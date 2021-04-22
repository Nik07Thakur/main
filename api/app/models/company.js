const mongoose = require('mongoose')
const mongoosePaginate = require('mongoose-paginate-v2')

const CompanySchema = new mongoose.Schema( 
  {
    name: { 
      type: String,
      required: true
    },
    userId: { 
      type: String,
    },
    country: {
      type: String,
      required: true
    },
    streetAddress: {
      type: String,
      required: true
    },
    mainBusinessActivities: {
      type: String,
      required: true
    },
    shareHolders: {
      type: String,
      required: true
    },
    percentages: {
      type: String,
      required: true
    },
  },
  {
    versionKey: false,
    timestamps: true
  }
)

// CompanySchema.pre('save', function (next) {
//   const that = this
//   const SALT_FACTOR = 0
//   // if (!that.isModified('password')) {
//   //   return next()
//   // }
//   return hash(that, SALT_FACTOR, next)
// })

CompanySchema.plugin(mongoosePaginate)
module.exports = mongoose.model('Company', CompanySchema)
