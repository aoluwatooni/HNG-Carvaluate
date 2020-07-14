# Dependencies
from flask import Flask, request, jsonify
import joblib
import traceback
import pandas as pd
import numpy as np
regr = joblib.load("model.pkl")  # Load "model.pkl"
model_columns = joblib.load("model_columns.pkl") # Load "model_columns.pkl"

# Your API definition
app = Flask(__name__)


@app.route('/predict', methods=['POST'])
def predict():
    if regr:
        try:
            json_ = request.json
            print(json_)
            query = pd.get_dummies(pd.DataFrame(json_))
            query = query.reindex(columns=model_columns, fill_value=0)

            prediction = list(regr.predict(query))

            return jsonify({'prediction': str(prediction)})

        except BaseException:

            return jsonify({'trace': traceback.format_exc()})
    else:
        print('Train the model first')
        return ('No model here to use')


if __name__ == '__main__':


    print('Model loaded')
    # Load "model_columns.pkl"
    model_columns = joblib.load("model_columns.pkl")
    print('Model columns loaded')

    app.run(port=5000, debug=True)
